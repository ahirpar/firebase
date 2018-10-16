<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$segment3 = $uri_segments[3];
$segment2 = $uri_segments[2];
//echo $segment2;
?>
<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li <?php
                        if ($segment3 == "index" || $segment3 == "") {
                            echo "class=active";
                        } else {
                            echo "";
                        }
                        ?>><a href="index"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a></li>

                        <li class="parent <?php
                        if ($segment3 == "menu" || $segment3 == "item_statistics") {
                            echo "active";
                        } else {
                            echo "";
                        }
                        ?>" ><a href="#"><i class="icon mdi mdi-pizza"></i><span>Menu</span></a>
                            <ul class="sub-menu">
                                <li <?php
                                if ($segment3 == "menu") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="menu">Overview</a></li>
                                <li <?php
                                if ($segment3 == "item_statistics") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="item_statistics">Item Statistics</a></li>
                            </ul>
                        </li>			  
                        <li class="parent <?php
                        if ($segment3 == "push_notification" || $segment3 == "mailinglist" || $segment3 == "vouchers" || $segment3 == "specials" || $segment3 == "reviews" || $segment3 == "customers") {
                            echo "active";
                        } else {
                            echo "";
                        }
                        ?>"><a href="#"><i class="icon mdi mdi-notifications"></i><span>Marketing</span></a>
                            <ul class="sub-menu">
                                <li <?php
                                if ($segment3 == "push_notification") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="push_notification">Push Notifications </a></li>
                                <li <?php
                                if ($segment3 == "mailinglist") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="mailinglist">Mail List </a></li>
                                <li <?php
                                if ($segment3 == "vouchers") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="vouchers">Vouchers </a></li>
                                <li <?php
                                if ($segment3 == "specials") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="specials">Specials </a></li>
                                <li <?php
                                if ($segment3 == "reviews") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="reviews">Reviews </a></li>
                                <li <?php
                                if ($segment3 == "customers") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="customers">Customers </a></li>
                            </ul>
                        </li>
                        <li class="parent <?php
                        if ($segment3 == "current-deliveries" || $segment3 == "delivery-status" || $segment3 == "delivery-suburbs" || $segment3 == 'drivers') {
                            echo "active";
                        } else {
                            echo "";
                        }
                        ?>"><a href="#"><i class="icon mdi mdi-car"></i><span>Delivery </span></a>
                            <ul class="sub-menu">
                                <li <?php
                                if ($segment3 == "current-deliveries") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="current-deliveries">Current Deliveries </a></li>
                                <li <?php
                                if ($segment3 == "delivery-status") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="delivery-status">Delivery Status </a></li>
                                <li <?php
                                if ($segment3 == "delivery-suburbs") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="delivery-suburbs">Delivery Area </a></li>
                                <li <?php
                                if ($segment3 == "drivers") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="drivers">Drivers </a></li>
                            </ul>
                        </li>
                        <li class="parent <?php
                        if ($segment3 == "pickup_statistics") {
                            echo "active";
                        } else {
                            echo "";
                        }
                        ?>"><a href="#"><i class="icon mdi mdi-walk"></i><span>Pickup </span></a>
                            <ul class="sub-menu">
                                <li <?php
                                if ($segment3 == "pickup_statistics") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="pickup_statistics">Pickup Statistics </a></li>
                            </ul>
                        </li> 				  
                        <li class="parent <?php
                        if ($segment3 == "reservations" || $segment3 == "reservation_statistics") {
                            echo "active";
                        } else {
                            echo "";
                        }
                        ?>"><a href="#"><i class="icon mdi mdi-seat"></i><span>Restaurant </span></a>
                            <ul class="sub-menu">
                                <li <?php
                                if ($segment3 == "reservations") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="reservations">Current Reservations </a></li>
                                <li <?php
                                if ($segment3 == "reservation_statistics") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="reservation_statistics">Reservations Statistics </a></li>
                            </ul>
                        </li>
                        <li class="parent <?php
                        if ($segment3 == "traffic") {
                            echo "active";
                        } else {
                            echo "";
                        }
                        ?>"><a href="#"><i class="icon mdi mdi-traffic"></i><span>Traffic </span></a>
                            <ul class="sub-menu">
                                <li><a href="traffic">Analytics </a></li>
                            </ul>
                        </li> 				  
                        <li class="parent <?php
                        if ($segment3 == "shifts" || $segment3 == "system_setting") {
                            echo "class=active";
                        } else {
                            echo "";
                        }
                        ?>"><a href="#"><i class="icon mdi mdi-settings"></i><span>Admin </span></a>
                            <ul class="sub-menu">
                                <li <?php
                                if ($segment3 == "shifts") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="shifts">Shifts </a></li>
                                <li <?php
                                if ($segment3 == "system_setting") {
                                    echo "class=active";
                                } else {
                                    echo "";
                                }
                                ?>><a href="system_setting">Store Settings</a></li>
                            </ul>
                        </li> 				  
                        <li <?php
                        if ($segment3 == "instore") {
                            echo "class=active";
                        } else {
                            echo "";
                        }
                        ?>><a href="instore"><i class="icon mdi mdi-desktop-windows"></i><span>In Store Screen </span></a></li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">10%</span><span class="name">Current Project </span></div>
            <div class="progress">
                <div style="width: 10%;" class="progress-bar progress-bar-primary"></div>
            </div>
        </div>

    </div>
</div>

<script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
