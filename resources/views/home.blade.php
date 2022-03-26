<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90680653-2');
        </script>

        <!-- Required meta tags -->
        <meta charset="utf-8"><style data-styles="">ion-icon{visibility:hidden}.hydrated{visibility:inherit}</style>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Meta -->
        <meta name="description" content="Responsive Bootstrap 5 Dashboard Template">
        <meta name="author" content="BootstrapDash">

        <title>Pus Team (Team Management)</title>

        <!-- vendor css -->
        <link href="{{ asset('assets/lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/typicons.font/typicons.css') }}" rel="stylesheet">

        <!-- azia CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/azia.css') }}">

        <script type="module" src="https://bootstrapdash.com/demo/azia/v1.0.0/lib/ionicons/ionicons/ionicons.esm.js"></script><script nomodule="" src="https://bootstrapdash.com/demo/azia/v1.0.0/lib/ionicons/ionicons/ionicons.js"></script><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
    </head>
    <body class="az-body">

        <div class="az-header shadow-none">
        <div class="container-fluid">
            <div class="az-header-left">
            <a href="index.html" class="az-logo">az<span>i</span>a</a>
            <a href="" id="azNavShow" class="az-header-menu-icon d-lg-none"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-center">
            <input type="search" class="form-control" placeholder="Search for schedules and events...">
            <button class="btn"><i class="fas fa-search"></i></button>
            </div><!-- az-header-center -->
            <div class="az-header-right">
            <div class="az-header-message">
                <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
                <a href="" class="new"><i class="typcn typcn-bell"></i></a>
                <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                    <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
                <p class="az-notification-text">You have 2 unread notification</p>
                <div class="az-notification-list">
                    <div class="media new">
                    <div class="az-img-user"><img src="../img/faces/face2.jpg" alt=""></div>
                    <div class="media-body">
                        <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                        <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media new">
                    <div class="az-img-user online"><img src="../img/faces/face3.jpg" alt=""></div>
                    <div class="media-body">
                        <p><strong>Joyce Chua</strong> just created a new blog post</p>
                        <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></div>
                    <div class="media-body">
                        <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                        <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                    <div class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></div>
                    <div class="media-body">
                        <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                        <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                    </div><!-- media -->
                </div><!-- az-notification-list -->
                <div class="dropdown-footer"><a href="">View All Notifications</a></div>
                </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
                <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
                <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                    <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                    <div class="az-img-user">
                    <img src="../img/faces/face1.jpg" alt="">
                    </div><!-- az-img-user -->
                    <h6>Aziana Pechon</h6>
                    <span>Premium Member</span>
                </div><!-- az-header-profile -->

                <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
                </div><!-- dropdown-menu -->
            </div>
            </div><!-- az-header-right -->
        </div><!-- container -->
        </div><!-- az-header -->

        <div class="az-navbar az-navbar-dashboard-four">
        <div class="container-fluid">
            <div class="az-navbar-header">
            <a href="index.html" class="az-logo">az<span>i</span>a</a>
            </div><!-- az-navbar-header -->
            <div class="az-navbar-search">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search "></i></button>
            </div><!-- az-navbar-search -->
            <ul class="nav">
            <li class="nav-label">Main Menu</li>
            <li class="nav-item active">
                <a href="index.html" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
                <ul class="nav-sub">
                <li class="nav-sub-item"><a href="dashboard-one.html" class="nav-sub-link">Web Analytics</a></li>
                <li class="nav-sub-item"><a href="dashboard-two.html" class="nav-sub-link">Sales Monitoring</a></li>
                <li class="nav-sub-item"><a href="dashboard-three.html" class="nav-sub-link">Ad Campaign</a></li>
                <li class="nav-sub-item active"><a href="dashboard-four.html" class="nav-sub-link">Event Management</a></li>
                <li class="nav-sub-item"><a href="dashboard-five.html" class="nav-sub-link">Helpdesk Management</a></li>
                <li class="nav-sub-item"><a href="dashboard-six.html" class="nav-sub-link">Finance Monitoring</a></li>
                <li class="nav-sub-item"><a href="dashboard-seven.html" class="nav-sub-link">Cryptocurrency</a></li>
                <li class="nav-sub-item"><a href="dashboard-eight.html" class="nav-sub-link">Executive / SaaS</a></li>
                <li class="nav-sub-item"><a href="dashboard-nine.html" class="nav-sub-link">Campaign Monitoring</a></li>
                <li class="nav-sub-item"><a href="dashboard-ten.html" class="nav-sub-link">Product Management</a></li>
                </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="typcn typcn-folder"></i>Apps</a>
                <ul class="nav-sub">
                <li class="nav-sub-item">
                    <a href="app-mail.html" class="nav-sub-link">Mailbox</a>
                </li>
                <li class="nav-sub-item">
                    <a href="app-chat.html" class="nav-sub-link">Chat</a>
                </li>
                <li class="nav-sub-item">
                    <a href="app-calendar.html" class="nav-sub-link">Calendar</a>
                </li>
                <li class="nav-sub-item">
                    <a href="app-contacts.html" class="nav-sub-link">Contacts</a>
                </li>
                <li class="nav-sub-item"><a href="app-kanban.html" class="nav-sub-link">Kanban</a></li>
                <li class="nav-sub-item"><a href="app-tickets.html" class="nav-sub-link">Tickets</a></li>
                </ul>
            </li><!-- nav-item -->

            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Pages</a>
                <ul class="nav-sub">
                <li class="nav-sub-item"><a href="page-profile.html" class="nav-sub-link">Profile</a></li>
                <li class="nav-sub-item"><a href="page-invoice.html" class="nav-sub-link">Invoice</a></li>
                <li class="nav-sub-item"><a href="page-signin.html" class="nav-sub-link">Sign In</a></li>
                <li class="nav-sub-item"><a href="page-signup.html" class="nav-sub-link">Sign Up</a></li>
                <li class="nav-sub-item"><a href="page-404.html" class="nav-sub-link">Page 404</a></li>
                <li class="nav-sub-item"><a href="page-faq.html" class="nav-sub-link">Faq</a></li>
                <li class="nav-sub-item"><a href="page-news-grid.html" class="nav-sub-link">News Grid</a></li>
                <li class="nav-sub-item"><a href="page-product-catalogue.html" class="nav-sub-link">Product Catalogue</a></li>
                <li class="nav-sub-item"><a href="page-project-list.html" class="nav-sub-link">Project List</a></li>
                <li class="nav-sub-item"><a href="page-order.html" class="nav-sub-link">Orders</a></li>
                <li class="nav-sub-item"><a href="page-pricing.html" class="nav-sub-link">Pricing</a></li>
                <li class="nav-sub-item"><a href="landing-sass.html" class="nav-sub-link">Landing Page</a></li>
                </ul>
            </li><!-- nav-item -->
            <li class="nav-item nav-item-mega">
                <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>Components</a>
                <div class="nav-sub nav-sub-mega">
                <div class="container-fluid">
                    <div>
                    <ul class="nav">
                        <li><span>UI Elements</span></li>
                        <li class="nav-sub-item"><a href="elem-accordion.html" class="nav-sub-link active">Accordion</a></li>
                        <li class="nav-sub-item"><a href="elem-alerts.html" class="nav-sub-link">Alerts</a></li>
                        <li class="nav-sub-item"><a href="elem-avatar.html" class="nav-sub-link">Avatar</a></li>
                        <li class="nav-sub-item"><a href="elem-badge.html" class="nav-sub-link">Badge</a></li>
                        <li class="nav-sub-item"><a href="elem-breadcrumbs.html" class="nav-sub-link">Breadcrumbs</a></li>
                        <li class="nav-sub-item"><a href="elem-buttons.html" class="nav-sub-link">Buttons</a></li>
                        <li class="nav-sub-item"><a href="elem-cards.html" class="nav-sub-link">Cards</a></li>
                        <li class="nav-sub-item"><a href="elem-carousel.html" class="nav-sub-link">Carousel</a></li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-sub-item"><a href="elem-collapse.html" class="nav-sub-link">Collapse</a></li>
                        <li class="nav-sub-item"><a href="elem-dropdown.html" class="nav-sub-link">Dropdown</a></li>
                        <li class="nav-sub-item"><a href="elem-icons.html" class="nav-sub-link">Icons</a></li>
                        <li class="nav-sub-item"><a href="elem-images.html" class="nav-sub-link">Images</a></li>
                        <li class="nav-sub-item"><a href="elem-list-group.html" class="nav-sub-link">List Group</a></li>
                        <li class="nav-sub-item"><a href="elem-media-object.html" class="nav-sub-link">Media Object</a></li>
                        <li class="nav-sub-item"><a href="elem-modals.html" class="nav-sub-link">Modals</a></li>
                        <li class="nav-sub-item"><a href="elem-navigation.html" class="nav-sub-link">Navigation</a></li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-sub-item"><a href="elem-pagination.html" class="nav-sub-link">Pagination</a></li>
                        <li class="nav-sub-item"><a href="elem-popover.html" class="nav-sub-link">Popover</a></li>
                        <li class="nav-sub-item"><a href="elem-progress.html" class="nav-sub-link">Progress</a></li>
                        <li class="nav-sub-item"><a href="elem-spinners.html" class="nav-sub-link">Spinners</a></li>
                        <li class="nav-sub-item"><a href="elem-toast.html" class="nav-sub-link">Toast</a></li>
                        <li class="nav-sub-item"><a href="elem-tooltip.html" class="nav-sub-link">Tooltip</a></li>
                    </ul>
                    </div>
                    <div>
                    <ul class="nav">
                        <li><span>Forms</span></li>
                        <li class="nav-sub-item"><a href="form-elements.html" class="nav-sub-link">Form Elements</a></li>
                        <li class="nav-sub-item"><a href="form-layouts.html" class="nav-sub-link">Form Layouts</a></li>
                        <li class="nav-sub-item"><a href="form-validation.html" class="nav-sub-link">Form Validation</a></li>
                        <li class="nav-sub-item"><a href="form-wizards.html" class="nav-sub-link">Form Wizards</a></li>
                        <li class="nav-sub-item"><a href="form-editor.html" class="nav-sub-link">WYSIWYG Editor</a></li>
                    </ul>
                    </div>
                    <div>
                    <ul class="nav">
                        <li><span>Charts</span></li>
                        <li class="nav-sub-item"><a href="chart-morris.html" class="nav-sub-link">Morris Charts</a></li>
                        <li class="nav-sub-item"><a href="chart-flot.html" class="nav-sub-link">Flot Charts</a></li>
                        <li class="nav-sub-item"><a href="chart-chartjs.html" class="nav-sub-link">ChartJS</a></li>
                        <li class="nav-sub-item"><a href="chart-sparkline.html" class="nav-sub-link">Sparkline</a></li>
                        <li class="nav-sub-item"><a href="chart-peity.html" class="nav-sub-link">Peity</a></li>
                    </ul>
                    </div>
                    <div>
                    <ul class="nav">
                        <li><span>Maps</span></li>
                        <li class="nav-sub-item"><a href="map-google.html" class="nav-sub-link">Google Maps</a></li>
                        <li class="nav-sub-item"><a href="map-leaflet.html" class="nav-sub-link">Leaflet</a></li>
                        <li class="nav-sub-item"><a href="map-vector.html" class="nav-sub-link">Vector Maps</a></li>
                        <li><span>Tables</span></li>
                        <li class="nav-sub-item"><a href="table-basic.html" class="nav-sub-link">Basic Tables</a></li>
                        <li class="nav-sub-item"><a href="table-data.html" class="nav-sub-link">Data Tables</a></li>
                    
                    </ul></div>
                </div><!-- container -->
                </div><!-- nav-sub -->
            </li><!-- nav-item -->
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Utilities</a>
                <ul class="nav-sub">
                <li class="nav-sub-item"><a href="util-background.html" class="nav-sub-link">Background</a></li>
                <li class="nav-sub-item"><a href="util-border.html" class="nav-sub-link">Border</a></li>
                <li class="nav-sub-item"><a href="util-display.html" class="nav-sub-link">Display</a></li>
                <li class="nav-sub-item"><a href="util-flex.html" class="nav-sub-link">Flex</a></li>
                <li class="nav-sub-item"><a href="util-height.html" class="nav-sub-link">Height</a></li>
                <li class="nav-sub-item"><a href="util-margin.html" class="nav-sub-link">Margin</a></li>
                <li class="nav-sub-item"><a href="util-padding.html" class="nav-sub-link">Padding</a></li>
                <li class="nav-sub-item"><a href="util-position.html" class="nav-sub-link">Position</a></li>
                <li class="nav-sub-item"><a href="util-typography.html" class="nav-sub-link">Typography</a></li>
                <li class="nav-sub-item"><a href="util-width.html" class="nav-sub-link">Width</a></li>
                <li class="nav-sub-item"><a href="util-extras.html" class="nav-sub-link">Extras</a></li>
                </ul>
            </li><!-- nav-item -->
            </ul><!-- nav -->
        </div><!-- container-fluid -->
        </div><!-- az-navbar -->

        <div class="az-content az-content-dashboard-four">
        <div class="media media-dashboard">
            <div class="media-body">
            <div class="az-content-header">
                <div>
                <h6 class="az-content-title tx-18 mg-b-5">Event Monitoring Dashboard</h6>
                <p class="az-content-text tx-13 mg-b-0">Hi, welcome back! Here's your summary of your events.</p>
                </div>

                <div class="az-content-header-right">
                <div class="media">
                    <div class="media-body">
                    <label>Start Date</label>
                    <h6>Oct 10, 2018</h6>
                    </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                    <div class="media-body">
                    <label>End Date</label>
                    <h6>Oct 23, 2018</h6>
                    </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                    <div class="media-body">
                    <label>Event Category</label>
                    <h6>All Categories</h6>
                    </div><!-- media-body -->
                </div><!-- media -->
                <a href="" class="btn btn-purple">Export</a>
                </div>
            </div><!-- az-content-header -->

            <div class="card card-dashboard-twelve mg-b-20">
                <div class="card-header">
                <h6 class="card-title">Sales Overview <span>(All Events)</span></h6>

                <div class="sales-overview">
                    <div class="media">
                    <div class="media-icon bg-purple"><i class="typcn typcn-ticket"></i></div>
                    <div class="media-body">
                        <label>Tickets Sold</label>
                        <h4>3,375</h4>
                        <span><strong>10.5%</strong> of 20,000 Total</span>
                    </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                    <div class="media-icon bg-teal"><i class="typcn typcn-ticket"></i></div>
                    <div class="media-body">
                        <label>Tickets Available</label>
                        <h4>16,625</h4>
                        <span><strong>89.5%</strong> of 20,000 Total</span>
                    </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                    <div class="media-icon bg-primary"><i class="typcn typcn-chart-area-outline"></i></div>
                    <div class="media-body">
                        <label>Net Revenue</label>
                        <h4><span>$</span>20,832</h4>
                        <span><strong>3.4%</strong> of Sales Avg.</span>
                    </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                    <div class="media-body">
                        <label>About Revenue</label>
                        <p>The total revenue from all events transactions. Depending on your implementation, this can include tax, discounts such as early bird promo. <a href="">Learn more</a></p>
                    </div><!-- media-body -->
                    </div><!-- media -->
                </div><!-- sales-overview -->
                </div><!-- card-header -->
                <div class="card-body">
                <div class="chart-legend">
                    <div><span class="bg-indigo"></span> Tickets Sold</div>
                    <div><span class="bg-teal"></span> Tickets Available</div>
                </div><!-- chart-legend -->
                <div class="chart-wrapper">
                    <div id="flotChart" class="flot-chart" style="padding: 0px;"><canvas class="flot-base" width="4106" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 2053.45px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 165px; text-align: center;"><span>Oct</span><span>10</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 299px; text-align: center;"><span>Oct</span><span>11</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 434px; text-align: center;"><span>Oct</span><span>12</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 568px; text-align: center;"><span>Oct</span><span>13</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 703px; text-align: center;"><span>Oct</span><span>14</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 837px; text-align: center;"><span>Oct</span><span>15</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 972px; text-align: center;"><span>Oct</span><span>16</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1106px; text-align: center;"><span>Oct</span><span>17</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1240px; text-align: center;"><span>Oct</span><span>18</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1375px; text-align: center;"><span>Oct</span><span>19</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1509px; text-align: center;"><span>Oct</span><span>20</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1644px; text-align: center;"><span>Oct</span><span>21</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1778px; text-align: center;"><span>Oct</span><span>22</span></div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1913px; text-align: center;"><span>Oct</span><span>23</span></div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div style="position: absolute; top: 286px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 12px; text-align: right;">0k</div><div style="position: absolute; top: 239px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 6px; text-align: right;">20k</div><div style="position: absolute; top: 192px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 6px; text-align: right;">40k</div><div style="position: absolute; top: 146px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 6px; text-align: right;">60k</div><div style="position: absolute; top: 99px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 6px; text-align: right;">80k</div><div style="position: absolute; top: 53px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 0px; text-align: right;">100k</div></div></div><canvas class="flot-overlay" width="4106" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 2053.45px; height: 300px;"></canvas></div>
                </div><!-- chart-wrapper -->
                </div><!-- card-body -->
            </div><!-- card -->

            <div class="row row-sm mg-b-20">
                <div class="col-md-6">
                <div class="card card-dashboard-fourteen">
                    <label class="az-content-label">Ticket Sales <span>(This Month)</span></label>
                    <div class="card-body">
                    <div class="sparkline-wrapper"><span id="sparkline"><canvas width="415" height="100" style="display: inline-block; width: 415px; height: 100px; vertical-align: top;"></canvas></span></div>
                    </div>
                    <div class="card-footer row no-gutters">
                    <div class="col-4">
                        <h6>9,800</h6>
                        <label>Tickets For Sale</label>
                    </div><!-- col -->
                    <div class="col-4">
                        <h6>7,258</h6>
                        <label>Tickets Sold</label>
                    </div><!-- col -->
                    <div class="col-4">
                        <h6>2,542</h6>
                        <label>Tickets Unsold</label>
                    </div><!-- col -->
                    </div><!-- card-footer -->
                </div><!-- card -->
                </div><!-- col -->
                <div class="col-md-6 mg-t-20 mg-md-t-0">
                <div class="card card-dashboard-fourteen">
                    <label class="az-content-label">Sales Revenue <span>(This Month)</span></label>
                    <div class="card-body">
                    <h1><span>$</span>876,899.60</h1>
                    <label>Total Revenue</label>
                    <div class="row mg-t-15">
                        <div class="col-6">
                        <h4>1,500</h4>
                        <span>Events Hosted</span>
                        <div class="progress mg-t-5 ht-5">
                            <div class="progress-bar wd-80p" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>80% of your goals</small>
                        </div><!-- col -->
                        <div class="col-6">
                        <h4>991</h4>
                        <span>Events that earned</span>
                        <div class="progress mg-t-5 ht-5">
                            <div class="progress-bar wd-50p bg-teal" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>50% of your goals</small>
                        </div><!-- col -->
                    </div><!-- row -->
                    </div><!-- card-body -->
                </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->

            <div class="card card-dashboard-thirteen">
                <label class="az-content-label">Events Interest Comparison</label>
                <p class="az-content-text">A comparison of people who mark themeselves of their interest based from the date range given above.</p>
                <div class="row mg-t-20 mg-b-20">
                <div class="col-lg-4">
                    <div id="flotPie" class="wd-100p ht-250" style="padding: 0px; position: relative;"><canvas class="flot-base" width="1320" height="500" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 660.141px; height: 250px;"></canvas><canvas class="flot-overlay" width="1320" height="500" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 660.141px; height: 250px;"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 49.75px; left: 384.774px;"><div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">26%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 203.75px; left: 347.774px;"><div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">39%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 117.75px; left: 223.774px;"><div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">20%</div></span><span class="pieLabel" id="pieLabel3" style="position: absolute; top: 31.75px; left: 274.774px;"><div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">15%</div></span></div>
                </div><!-- col -->
                <div class="col-lg-8 mg-t-40 mg-lg-t-0">
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="media">
                        <div class="media-icon tx-purple">
                            <i class="icon ion-ios-man"></i>
                        </div>
                        <div class="media-body">
                            <h6>3,890 <span>(26%)</span></h6>
                            <label>Interested</label>
                        </div><!-- media-body -->
                        </div><!-- media -->
                        <span>People who have a ticket reservation of the event is automatically mark as interested.</span>
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                        <div class="media">
                        <div class="media-icon tx-primary">
                            <i class="icon ion-ios-man"></i>
                        </div>
                        <div class="media-body">
                            <h6>8,005 <span>(39%)</span></h6>
                            <label>Going</label>
                        </div><!-- media-body -->
                        </div><!-- media -->
                        <span>People who have bought a ticket of the event is automatically mark as going.</span>
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20 mg-lg-t-40">
                        <div class="media">
                        <div class="media-icon tx-teal">
                            <i class="icon ion-ios-man"></i>
                        </div>
                        <div class="media-body">
                            <h6>2,120 <span>(20%)</span></h6>
                            <label>Maybe</label>
                        </div><!-- media-body -->
                        </div><!-- media -->
                        <span>People who have viewed the event details and set themeselves as maybe.</span>
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20 mg-lg-t-40">
                        <div class="media">
                        <div class="media-icon tx-gray-500">
                            <i class="icon ion-ios-man"></i>
                        </div>
                        <div class="media-body">
                            <h6>1,613 <span>(15%)</span></h6>
                            <label>Not Going</label>
                        </div><!-- media-body -->
                        </div><!-- media -->
                        <span>People who have viewed the event details and set themeselves as not going.</span>
                    </div><!-- col -->
                    </div><!-- row -->
                </div><!-- col -->
                </div><!-- row -->
            </div><!-- card -->
            </div><!-- media-body -->

            <div class="media-aside">
            <div class="row row-sm">
                <div class="col-md-6 col-lg-4 col-xl-12">
                <div class="card card-dashboard-calendar">
                    <h6 class="card-title">Event Calendar</h6>
                    <div class="media az-media-date">
                    <h1>17</h1>
                    <div class="media-body">
                        <p>Nov 2018</p>
                        <span>Saturday</span>
                    </div>
                    </div>
                    <div class="card-body"><div class="fc-datepicker hasDatepicker" id="dp1647341675870"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">March</span>&nbsp;<span class="ui-datepicker-year">2022</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2022"><a class="ui-state-default ui-priority-secondary" href="#" aria-current="false" data-date="27">27</a></td><td class=" ui-datepicker-other-month undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2022"><a class="ui-state-default ui-priority-secondary" href="#" aria-current="false" data-date="28">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="1">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="2">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="3">3</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="4">4</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="5">5</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="6">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="7">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="8">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="9">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="10">10</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="11">11</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="12">12</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="13">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="14">14</a></td><td class=" ui-datepicker-days-cell-over undefined ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#" aria-current="true" data-date="15">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="16">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="17">17</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="18">18</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="19">19</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="20">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="21">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="22">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="23">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="24">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="25">25</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="26">26</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="27">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="28">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="29">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="30">30</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="31">31</a></td><td class=" ui-datepicker-other-month undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default ui-priority-secondary" href="#" aria-current="false" data-date="1">1</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default ui-priority-secondary" href="#" aria-current="false" data-date="2">2</a></td></tr></tbody></table></div></div></div>
                </div><!-- card -->
                </div><!-- col -->
                <div class="col-md-6 col-lg-8 col-xl-12 mg-t-20 mg-md-t-0 mg-xl-t-20">
                <div class="card card-dashboard-events">
                    <div class="card-header">
                    <h6 class="card-title">November 2018</h6>
                    <h5 class="card-subtitle">Upcoming Events</h5>
                    </div><!-- card-header -->
                    <div class="card-body">
                    <div class="list-group">
                        <div class="list-group-item">
                        <div class="event-indicator bg-purple"></div>
                        <label>Nov 20 <span>Tuesday</span></label>
                        <h6>PH World Mall Lantern Festival</h6>
                        <p><strong>8AM - 4PM</strong> Bay Area, San Francisco</p>
                        <small><span class="tx-danger">Sold Out</span> (3000 tickets sold)</small>

                        <div class="event-user">
                            <a href="" class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></a>
                            <a href="" class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></a>
                            <a href="" class="az-img-user"><img src="../img/faces/face6.jpg" alt=""></a>
                            <a href="" class="az-img-user"><img src="../img/faces/face7.jpg" alt=""></a>
                            <a href="">20+ more</a>
                        </div><!-- az-event-user -->
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                        <div class="event-indicator bg-primary"></div>
                        <label>Nov 23 <span>Friday</span></label>
                        <h6>Asia Pacific Generation Workshop</h6>
                        <p><strong>8AM - 5PM</strong> Singapore</p>
                        <small><span class="tx-warning">Sold Out Soon</span> (12 tickets left)</small>

                        <div class="event-user">
                            <a href="" class="az-img-user"><img src="../img/faces/face9.jpg" alt=""></a>
                            <a href="" class="az-img-user"><img src="../img/faces/face8.jpg" alt=""></a>
                            <a href="" class="az-img-user"><img src="../img/faces/face7.jpg" alt=""></a>
                            <a href="" class="az-img-user"><img src="../img/faces/face6.jpg" alt=""></a>
                            <a href="">20+ more</a>
                        </div><!-- az-event-user -->
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                        <div class="event-indicator bg-pink"></div>
                        <label>Nov 23 <span>Friday</span></label>
                        <h6>Korea Smart Device Trade Show</h6>
                        <p><strong>8AM - 5PM</strong> Singapore</p>
                        <small><span class="tx-success">Free Registration</span> (Limited seats only)</small>

                        <div class="event-user">
                            <a href="" class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></a>
                            <a href="" class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></a>
                            <a href="" class="az-img-user"><img src="../img/faces/face3.jpg" alt=""></a>
                            <a href="" class="az-img-user"><img src="../img/faces/face2.jpg" alt=""></a>
                            <a href="">20+ more</a>
                        </div><!-- az-event-user -->
                        </div><!-- list-group-item -->
                    </div><!-- list-group -->
                    </div><!-- card-body -->
                </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
            </div><!-- media-aside -->
        </div><!-- media -->

        </div><!-- az-content -->

        <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
            <span>© 2022 Jun pusproject.com | Support By Azia Teplate Free</span>
        </div><!-- container -->
        </div><!-- az-footer -->

        <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
        <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/lib/ionicons/ionicons.js') }}"></script>
        <script src="{{ asset('assets/lib/jquery.flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('assets/lib/jquery.flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('assets/lib/jquery.flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('assets/lib/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/azia.js') }}"></script>
        <script src="{{ asset('assets/js/chart.flot.sampledata.js') }}"></script>
        <script>
        $(function(){
            'use strict'

            // Datepicker found in left sidebar of the page
            var highlightedDays = ['2018-5-10','2018-5-11','2018-5-12','2018-5-13','2018-5-14','2018-5-15','2018-5-16'];
            var date = new Date();

            $('.fc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            dateFormat: 'yy-mm-dd',
            beforeShowDay: function(date) {
                var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
                for (var i = 0; i < highlightedDays.length; i++) {
                if($.inArray(y + '-' + (m+1) + '-' + d,highlightedDays) != -1) {
                    return [true, 'ui-date-highlighted', ''];
                }
                }
                return [true];
            }
            });

            var plot1 = $.plot('#flotChart', [{
                data: flotSampleData5,
                color: '#6610f2'
            },{
                data: flotSampleData3,
                color: '#00cccc'
            }], {
                    series: {
                        shadowSize: 0,
                lines: {
                show: true,
                lineWidth: 2,
                fill: true,
                fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
                }
                    },
            grid: {
                borderWidth: 0,
                borderColor: '#969dab',
                labelMargin: 5,
                markings: [{
                xaxis: { from: 10, to: 20 },
                color: '#f7f7f7'
                }]
            },
                    yaxis: {
                show: false,
                color: '#ced4da',
                tickLength: 10,
                min: 0,
                max: 110,
                font: {
                size: 11,
                color: '#969dab'
                },
                tickFormatter: function formatter(val, axis) {
                return val + 'k';
                }
            },
                    xaxis: {
                show: false,
                position: 'top',
                color: 'rgba(0,0,0,0.1)'
            }
                });

            var mqSM = window.matchMedia('(min-width: 576px)');
            var mqSMMD = window.matchMedia('(min-width: 576px) and (max-width: 991px)');
            var mqLG = window.matchMedia('(min-width: 992px)');

            function screenCheck() {
            if (mqSM.matches) {
                plot1.getAxes().yaxis.options.show = true;
                plot1.getAxes().xaxis.options.show = true;
            } else {
                plot1.getAxes().yaxis.options.show = false;
                plot1.getAxes().xaxis.options.show = false;
            }

            if (mqSMMD.matches) {
                var tick = [
                [0, '<span>Oct</span><span>10</span>'],
                [20, '<span>Oct</span><span>12</span>'],
                [40, '<span>Oct</span><span>14</span>'],
                [60, '<span>Oct</span><span>16</span>'],
                [80, '<span>Oct</span><span>18</span>'],
                [100, '<span>Oct</span><span>19</span>'],
                [120, '<span>Oct</span><span>20</span>'],
                [140, '<span>Oct</span><span>23</span>']
                ];

                plot1.getAxes().xaxis.options.ticks = tick;
            }

            if (mqLG.matches) {
                var tick = [
                [10, '<span>Oct</span><span>10</span>'],
                [20, '<span>Oct</span><span>11</span>'],
                [30, '<span>Oct</span><span>12</span>'],
                [40, '<span>Oct</span><span>13</span>'],
                [50, '<span>Oct</span><span>14</span>'],
                [60, '<span>Oct</span><span>15</span>'],
                [70, '<span>Oct</span><span>16</span>'],
                [80, '<span>Oct</span><span>17</span>'],
                [90, '<span>Oct</span><span>18</span>'],
                [100, '<span>Oct</span><span>19</span>'],
                [110, '<span>Oct</span><span>20</span>'],
                [120, '<span>Oct</span><span>21</span>'],
                [130, '<span>Oct</span><span>22</span>'],
                [140, '<span>Oct</span><span>23</span>']
                ];

                plot1.getAxes().xaxis.options.ticks = tick;
            }
            }

            screenCheck();
            mqSM.addListener(screenCheck);
            mqSMMD.addListener(screenCheck);
            mqLG.addListener(screenCheck);

            plot1.setupGrid();
            plot1.draw();

            $.plot('#flotPie', [
            { label: 'Interested', data: [[1,25]], color: '#6f42c1'},
            { label: 'Going', data: [[1,38]], color: '#007bff'},
            { label: 'Maybe', data: [[1,20]], color: '#00cccc'},
            { label: 'Not Going', data: [[1,15]], color: '#969dab'}
            ], {
            series: {
                pie: {
                show: true,
                radius: 1,
                innerRadius: 0.5,
                label: {
                    show: true,
                    radius: 3/4,
                    formatter: labelFormatter
                }
                }
            },
            legend: { show: false }
            });

            function labelFormatter(label, series) {
            return '<div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">' + Math.round(series.percent) + '%</div>';
            }


            $('#sparkline').sparkline([15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15], {
            type: 'bar',
            height: 100,
            barWidth: 7,
            barColor: '#e9ecef',
            barSpacing: 5,
            chartRangeMin: 0,
            chartRangeMax: 15,
            disableTooltips: true,
            disableHighlight: true
            });

            $('#sparkline').sparkline([1,2,4,4,7,5,9,10,6,4,4,7,5,9,10,5,9,10,6,4,4,7,5,9,10,9,10,6,4,4,7,5,6,4,3,4], {
            composite: true,
            type: 'bar',
            barWidth: 7,
            barSpacing: 5,
            height: 100,
            barColor: '#6f42c1',
            chartRangeMin: 0,
            chartRangeMax: 15,
            disableTooltips: true,
            disableHighlight: true
            });


        });
        </script>
    

        <div class="az-navbar-backdrop"></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
    </body>
</html>
