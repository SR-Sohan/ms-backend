<div class="home_info  bg-white shadow-lg rounded mt-5 p-3 w-75">
    <div class=" d-flex align-items-center justify-content-between border-bottom border-secondary">
        <h4>Home Info</h4>
        <p class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#blogModal">
            <i class="fa-solid fa-plus"></i>
        </p> 
        <p class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#blogModal">
            <i class="fa-solid fa-edit"></i>
        </p> 
    </div>
    <div class="home_info_content pt-2">
        <p> <strong>Name:</strong> <span class="text-small">Meherab Hossain</span></p>
        <img class="img-fluid w-25" src="{{asset("assets/images/default.jpg")}}" alt="">
    </div>
</div>


<div class="home_info   bg-white shadow-lg rounded mt-5 p-3 w-50 mb-4">
    <div class="mb-3 d-flex justify-content-center">
        <input type="text" name="name" id="name">
        <button class="btn btn-success ms-2">Add</button>
    </div>
    <ol>
        <li class="">
            <span>Progommer</span>
            <i class="fa-solid fa-trash text-danger ms-3"></i>
        </li>
    </ol>
</div>