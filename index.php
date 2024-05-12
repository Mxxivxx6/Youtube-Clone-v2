<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="style.css" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Youtube</title>
</head>
<script src="script.js"></script>
<body>
    <nav class="flex-div">
        <div class="nav-left flex-div">
            <img src="./images/menu.png" class="menu-icon" alt srcset />
            <img src="./images/logo.png" class="logo" alt srcset />
        </div>
        <div class="nav-middle flex-div">
            <div class="search-box flex-div">
                <input type="text" placeholder="Search.." />
                <img src="./images/search.png" alt srcset />
            </div>
            <img src="./images/voice-search.png" class="mic-icon" alt srcset />
        </div>
        <div class="nav-right flex-div">
            <img src="./images/upload.png" alt srcset />
            <img src="./images/more.png" alt srcset />
            <img src="./images/notification.png" alt srcset />
            <img src="./images/profile.jpg" class="user-icon" alt srcset />
        </div>
    </nav>

    <!-- Side Bar -->

    <div class="sidebar">
        <div class="shortcut-links">
            <a href="#"><img src="./images/home.png" />
                <p>Trang chủ</p>
            </a>
            <a href="#"><img src="./images/explore.png" />
                <p>Xu hướng</p>
            </a>
            <a href="#"><img src="./images/subscriprion.png" />
                <p>Kênh đăng kí</p>
            </a>
            <hr />
            <a href="#"><img src="./images/library.png" />
                <p>Thu viện</p>
            </a>
            <a href="#"><img src="./images/history.png" />
                <p>Lịch sử</p>
            </a>
            <a href="#"><img src="./images/playlist.png" />
                <p>Danh sách phát</p>
            </a>
            <a href="#"><img src="./images/messages.png" />
                <p>Tin nhắn</p>
            </a>
            <a href="#"><img src="./images/show-more.png" />
                <p>Hiện thị thêm</p>
            </a>
            <hr />
        </div>
        <div class="subscribed-list">
            <h3>Kênh đăng kí</h3>
            <a href="#"><img src="./images/Jack.png" />
                <p>F8 Offical</p>
            </a>
            <a href="#"><img src="./images/simon.png" />
                <p>evondev</p>
            </a>
            <a href="#"><img src="./images/tom.png" />
                <p>Phạm Huy Hoàng</p>
            </a>
            <a href="#"><img src="./images/megan.png" />
                <p>Langchain</p>
            </a>
            <a href="#"><img src="./images/cameron.png" />
                <p>Yêu tiếng anh</p>
            </a>
        </div>
    </div>
    <?php
        $connect = mysqli_connect('localhost','root','','youtube');
        mysqli_set_charset($connect,'utf8');
        $query = 'select * from videos';
        $result = mysqli_query($connect, $query);
    ?>
    <!-- Main Body -->
    <div class="container">
        <div class="banner">
            <img src="./images/banner.png" alt srcset />
        </div>
        <div class="list-container">
        <?php foreach ($result as $each):?>
          <div class="vid-list">
                <a class="video-he" href="video-1.html">
                    <img src="<?php echo $each['img'] ?>" class="thumbnail" /></a>
                <video class="video"  muted preload="none" style="display:none;">
              <source src="./images/1.mp4" type="video/mp4">
              Your browser does not support the video tag.
          </video>
                <div class="flex-div">
                    <img src="./images/nilava.jpeg" />
                    <div class="vid-info">
                        <a href="video-1.html"><?php echo $each['name'] ?></a>
                        <p><?php echo $each['channel'] ?></p>
                        <p><?php echo $each['view'] ?>M Views &bull; 2 days</p>
                    </div>
                </div>
            </div>
        </tr>
        <?php endforeach ?>
        <?php foreach ($result as $each):?>
          <div class="vid-list">
                <a class="video-he" href="video-1.html">
                    <img src="<?php echo $each['img'] ?>" class="thumbnail" /></a>
                <video class="video"  muted preload="none" style="display:none;">
              <source src="./images/1.mp4" type="video/mp4">
              Your browser does not support the video tag.
          </video>
                <div class="flex-div">
                    <img src="./images/nilava.jpeg" />
                    <div class="vid-info">
                        <a href="video-1.html"><?php echo $each['name'] ?></a>
                        <p><?php echo $each['channel'] ?></p>
                        <p><?php echo $each['view'] ?>M Views &bull; 2 days</p>
                    </div>
                </div>
            </div>
        </tr>
        <?php endforeach ?>
        <?php foreach ($result as $each):?>
          <div class="vid-list">
                <a class="video-he" href="video-1.html">
                    <img src="<?php echo $each['img'] ?>" class="thumbnail" /></a>
                <video class="video"  muted preload="none" style="display:none;">
              <source src="./images/1.mp4" type="video/mp4">
              Your browser does not support the video tag.
          </video>
                <div class="flex-div">
                    <img src="./images/nilava.jpeg" />
                    <div class="vid-info">
                        <a href="video-1.html"><?php echo $each['name'] ?></a>
                        <p><?php echo $each['channel'] ?></p>
                        <p><?php echo $each['view'] ?>M Views &bull; 2 days</p>
                    </div>
                </div>
            </div>
        </tr>
        <?php endforeach ?>
        <?php foreach ($result as $each):?>
          <div class="vid-list">
                <a class="video-he" href="video-1.html">
                    <img src="<?php echo $each['img'] ?>" class="thumbnail" /></a>
                <video class="video"  muted preload="none" style="display:none;">
              <source src="./images/1.mp4" type="video/mp4">
              Your browser does not support the video tag.
          </video>
                <div class="flex-div">
                    <img src="./images/nilava.jpeg" />
                    <div class="vid-info">
                        <a href="video-1.html"><?php echo $each['name'] ?></a>
                        <p><?php echo $each['channel'] ?></p>
                        <p><?php echo $each['view'] ?>M Views &bull; 2 days</p>
                    </div>
                </div>
            </div>
        </tr>
        <?php endforeach ?>
            
            

           
        </div>
    </div>

    <script src="side-bar.js">
        < /> <
        /body>

        <
        /html>