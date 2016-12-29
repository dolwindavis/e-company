<div class="admin-header">
    <div class="container">
        <div class="row">
            <div class="header-wrapper">
                <!-- profile pic -->
                <div class="profile-pic">
                    <img src="images/icons/propic.png" alt="" height="110px" width="110px">
                </div>

                <div class="name-details">
                    <h4>Sam Thomas</h4>
                </div>
                <div class="bio">
                    <p>Frontend Developer</p>
                </div>
                <div class="status">
                    <h6>Nothing to ask really just a big "Thank you".</h6>
                </div>
                <div class="social-post">
                    <div class="social-icons flex-middle-horizontal">
                        <div class="social-wrapper">
                            <button class="social" type="button" name="button"></button>
                            <button class="social" type="button" name="button"></button>
                            <button class="social" type="button" name="button"></button>
                            <button class="social" type="button" name="button"></button>
                        </div>
                    </div>
                    <div class="post-edit-buttons">
                <!-- post-modal-button -->
                        <button class="post" type="button" name="button" data-toggle="modal" data-target="#postModal">post</button>
                        <button class="edit-profile" type="button" name="button">edit profile</button>
                <!-- modal include -->
                        <div class="post-modal">
                            @include('partials.postmodal')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>