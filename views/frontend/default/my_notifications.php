<?php include "profile_menus.php"; ?>

<?php
$notification = $this->crud_model->get_notification_list()->result_array();
?>

<section class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="page-title">Notifications</h1>
            </div>
        </div>
    </div>
</section>

<section class="notifications-list-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="list-wrapper">
                    <div class="notification-list">
                        <ul>
                            <?php
                            foreach ($notification as $row) :
                            ?>
                                <li>
                                    <a href="">
                                        <div class="notification clearfix">
                                            <div class="notification-image">
                                                <img src="<?php echo base_url() . 'assets/frontend/img/author.jpg'; ?>" alt="" class="img-fluid">
                                            </div>
                                            <div class="notification-details">
                                                <p class="notification-text">
                                                   <?php echo $row["notification"];?>
                                                </p>
                                                <p class="notification-time">
                                                    <?php
                                                    echo $row["created_date"];
                                                    ?>
                                                </p>
                                            </div>
                                            <div class="mark-as-read" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Mark as Read"></div>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="notifications-footer">
                        <button type="button" class="mark-all-read">Mark All as Read</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>