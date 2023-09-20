<?php
include "./backend_inc/header.php";

?>


<div class="container-fluid">
    <div class="row">
        <div class=" col-lg-2">

        <label for="profileImage" class="mt-4">
            <img style="width: 180px; height:180px;"  src="https://api.dicebear.com/7.x/initials/svg?seed=<?= $_SESSION['user_auth']['frast_name']?>" alt="#" class="profile_image">
        </label>
            <input type="file"  id="profileImage" class="select_profile_img">
                
        
        </div>

        <div class=" col-lg-5 mt-3">
        
         <div class="col ">
             <input value="<?=$_SESSION['user_auth']['frast_name']?>" type="text" class="form-control" placeholder="First name" aria-label="First name">
           </div>
           <div class="col mt-3">
             <input value="<?=$_SESSION['user_auth']['last_name']?>" type="text" class="form-control" placeholder="Last name" aria-label="Last name">
           </div>
           <div class="col mt-3">
             <input value="<?=$_SESSION['user_auth']['email']?>" type="text" class="form-control" placeholder="Email address" aria-label="email">
         </div>

           <button class="btn btn-primary mt-3 ml-3" >UPDATE</button>

        </div>

        <div class=" col-lg-4">

        <div class="col mt-3 " >
             <input type="text" class="form-control" placeholder="Old password" aria-label="password">
           </div>

           <div class="col mt-3">
             <input type="text" class="form-control" placeholder="New password" aria-label="password">
           </div>

           <div class="col mt-3">
             <input type="text" class="form-control" placeholder="Create password" aria-label="password">
           </div>

           <button class="btn btn-primary mt-3 ml-3" >UPDATE</button>
        </div>
    </div>
</div>


<?php

 include "./backend_inc/footer.php";

?>


<!-- <script>

// let profileInput = document.querySelector('.profile_image')
// let profileImage = document.querySelector('.images')
// function update(event){
    
//     let url = URL.createObjectURL(event.target.files[0])
//     profileImage.src = url
//     console.log(url);
// }

// profileInput.addEventListener('change', update)

let profileInput = document.querySelector('.select_profile_img')
    let profileImage = document.querySelector('.profile_image')

    function updateImage(event){
        let url = URL.createObjectURL(event.target.files[0])
        profileImage.src = url
        console.log(url);
    }
    profileInput.addEventListener('change',updateImage)


</script> -->


<script>
    let profileInput = document.querySelector('.select_profile_img')
    let profileImage = document.querySelector('.profile_image')

    function updateImage(event){
        let url = URL.createObjectURL(event.target.files[0])
        profileImage.src = url
    }
    profileInput.addEventListener('change',updateImage)


</script>