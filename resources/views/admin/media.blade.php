@extends('layouts.admin')

<!-- index body start -->
@section('content')

<!-- Container-fluid starts-->
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title-header option-title justify-content-start">
                            <h5>Media Library</h5>
                            <div class="selected-options">
                                <ul>
                                    <li id="selectedCount">selected(0)</li>
                                    <li><a class="dropdown-item d-flex align-items-center" href="#" id="downloadSelected"><i class="ri-download-2-line me-2"></i>Download</a></li>
                                    <li><a href="#" id="deleteSelected"><i class="ri-delete-bin-line"></i></a></li>
                                </ul>
                            </div>
                            <div class="right-options ms-auto">
                                <ul>
                                    <li>
                                        <a class="btn btn-solid" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#mediaModel">Add Media</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row row-cols-xl-6 row-cols-md-5 row-cols-sm-3 row-cols-2 g-sm-3 g-2 media-library-sec ratio_square">
                            @foreach ($medias as $media)
                            <div>
                                <div class="library-box">
                                    <input type="checkbox" name="images[]" id="myCheckbox{{ $media->id }}" class="imageCheckbox" />
                                    <label for="myCheckbox{{ $media->id }}">
                                        <div>
                                            <img src="{{ url($media->image) }}" class="img-fluid bg-img bg_size_content" alt="">
                                        </div>
                                        <div class="dropdown">
                                            <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item d-flex align-items-center" href="{{ url($media->image) }}" download><i class="ri-download-2-line me-2"></i>Download</a></li>
                                                <li><a class="dropdown-item d-flex align-items-center deleteImage" href="{{ url('admin/media/'. $media->id .'/delete', []) }}"><i class="ri-delete-bin-line me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <script>
                            // Lấy danh sách tất cả các phần tử checkbox trong danh sách hình ảnh
var checkboxes = document.getElementsByClassName('imageCheckbox');

// Lặp qua danh sách các checkbox và thêm sự kiện lắng nghe cho mỗi checkbox
for (var i = 0; i < checkboxes.length; i++) {
  checkboxes[i].addEventListener('change', updateSelectedCount);
}

// Hàm xử lý sự kiện thay đổi checkbox
function updateSelectedCount() {
  // Đếm số lượng checkbox đã được chọn
  var selectedCount = 0;
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      selectedCount++;
    }
  }

  // Cập nhật nội dung của phần tử "selectedCount"
  var selectedCountElement = document.getElementById('selectedCount');
  selectedCountElement.textContent = 'selected(' + selectedCount + ')';
}
                            document.getElementById('downloadSelected').addEventListener('click', function() {
    var checkboxes = document.getElementsByClassName('imageCheckbox');
    var selectedImages = [];

    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            selectedImages.push(checkboxes[i]);
        }
    }

    if (selectedImages.length > 0) {
        for (var j = 0; j < selectedImages.length; j++) {
            var imageURL = selectedImages[j].parentNode.querySelector('img').src;
            var downloadLink = document.createElement('a');
            downloadLink.href = imageURL;
            downloadLink.download = 'image_' + j + '.jpg';
            downloadLink.click();
        }
    } else {
        console.log('No images selected.');
    }
});
              // Lắng nghe sự kiện khi người dùng nhấp vào biểu tượng xóa
document.getElementById('deleteSelected').addEventListener('click', function() {
    var selectedImages = [];
    var imageCheckboxes = document.getElementsByClassName('imageCheckbox');
    
    // Lặp qua tất cả các checkbox hình ảnh
    for (var i = 0; i < imageCheckboxes.length; i++) {
        if (imageCheckboxes[i].checked) {
            var imageId = imageCheckboxes[i].id.replace('myCheckbox', '');
            selectedImages.push(imageId);
        }
    }
    
    // Gửi yêu cầu POST để xóa các media đã chọn
    fetch('{{ url('/admin/medias') }}', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Thêm CSRF token của Laravel
    },
    body: JSON.stringify({ ids: selectedImages }),
})
.then(response => {
    if (response.ok) {
        // Xử lý thành công
        console.log('Xóa thành công!');
        location.reload(); // Load lại trang
    } else {
        // Xử lý lỗi
        console.error('Đã xảy ra lỗi khi xóa!');
    }
})
.catch(error => {
    console.error('Lỗi kết nối: ', error);
});
});
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="container-fluid">
        <!-- footer start-->
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                </div>
            </div>
        </footer>
    </div>
</div>



<!-- Insert Media modal start -->
<div class="modal fade media-modal" id="mediaModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Insert Media</h2>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal"><span class="lnr lnr-cross"></span></button>
            </div>
            <form action="{{ url('admin/media', []) }}" method="POST" enctype="multipart/form-data">
               @csrf
            <div class="modal-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#upload">Upload New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#select">Select File</a>
                    </li>
                </ul>
                <input type="file" multiple name="image[]" id="image" style="display: none">
                <label for="image" style="display: block">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="upload">
                            <div class="content-section drop-files-sec">
                                <div>
                                    <i class="ri-upload-cloud-2-line"></i>
                                    <h2>Drop files here, paste <span>or</span> <a href="#" class="font-blue">browse
                                            files</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="select">
                            <div class="select-top-panel">
                                <div>
                                    <input type="text" class="form-control" placeholder="Search your files">
                                </div>
                                <select class="form-select">
                                    <option>Sort By newest</option>
                                    <option>Sort By oldest</option>
                                    <option>Sort By smallest</option>
                                    <option>Sort By largest</option>
                                </select>
                            </div>
                            <div class="content-section select-file-section py-0 ratio2_3">
                                <div class="row g-sm-4 row-cols-xl-5 row-cols-lg-4 py-0 media-library-sec ratio_square row-cols-sm-3 row-cols-2 g-2">
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckboxone" />
                                            <label for="myCheckboxone">
                                                <div>
                                                    <img src="{{ url('assets_admin/images/product/1.png', []) }}" class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
    
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckboxtwo" />
                                            <label for="myCheckboxtwo">
                                                <div>
                                                    <img src="{{ url('assets_admin/images/product/2.png', []) }}" class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
    
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckboxthree" />
                                            <label for="myCheckboxthree">
                                                <div>
                                                    <img src="{{ url('assets_admin/images/product/3.png', []) }}" class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
    
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckboxfour" />
                                            <label for="myCheckboxfour">
                                                <div>
                                                    <img src="{{ url('assets_admin/images/product/4.png', []) }}" class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
    
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckboxfive" />
                                            <label for="myCheckboxfive">
                                                <div>
                                                    <img src="{{ url('assets_admin/images/product/5.png', []) }}" class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
    
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckboxsix" />
                                            <label for="myCheckboxsix">
                                                <div>
                                                    <img src="{{ url('assets_admin/images/product/6.png', []) }}" class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
    
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckboxseven" />
                                            <label for="myCheckboxseven">
                                                <div>
                                                    <img src="{{ url('assets_admin/images/product/7.png', []) }}" class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
    
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckboxeight" />
                                            <label for="myCheckboxeight">
                                                <div>
                                                    <img src="{{ url('assets_admin/images/product/8.png', []) }}" class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
    
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckboxnine" />
                                            <label for="myCheckboxnine">
                                                <div>
                                                    <img src="{{ url('assets_admin/images/product/9.png', []) }}" class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
    
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="library-box">
                                            <input type="checkbox" id="myCheckboxten" />
                                            <label for="myCheckboxten">
                                                <div>
                                                    <img src="{{ url('assets_admin/images/product/10.png', []) }}" class="img-fluid bg-img bg_size_content" alt="">
                                                </div>
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </a>
    
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-download-2-line me-2"></i>Download</a>
                                                        </li>
                                                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="ri-delete-bin-line me-2"></i>Delete</a>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
            </div>
            <div class="modal-footer">
                <div class="left-part">
                    <div class="file-detail">
                        <h6 id="file-count">0 File Selected</h6>
                        <a href="#" class="font-red" data-bs-original-title="" title="">Clear</a>
                    </div>
                        <script>
                            const fileInput = document.getElementById('image');
                            const fileCountElement = document.getElementById('file-count');
                            
                            fileInput.addEventListener('change', function() {
                                const fileCount = this.files.length;
                                fileCountElement.textContent = fileCount + (fileCount === 1 ? ' File Selected' : ' Files Selected');
                            });
                        </script>
                </div>
                <div class="right-part">
                    <button type="submit" class="btn btn-solid">Insert Media</button>
                </div>
            </div>
        </form>

        </div>
    </div>
</div>
<!-- Insert Media modal end -->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                <p>Are you sure you want to log out?</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="button-box">
                    <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- Delete Modal Box Start -->
<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box">
                    <p>The permission for the use/group, preview is inherited from the object, object will create a
                        new permission for this object</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box text-center">
                    <div class="wrapper">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                    </div>
                    <h4 class="text-content">It's Removed.</h4>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal Box End -->

<!-- latest js -->
@endsection