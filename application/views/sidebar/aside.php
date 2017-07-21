<aside class="sidebar">
  <div class="sidebar-container">
    <div class="sidebar-header">
      <div class="brand">
        <img src="logo.png" class="img-responsive" style="height:34px;margin-left:20px;"/>
      </div>
      <nav class="menu">
        <ul class="nav metismenu" id="sidebar-menu">
          <li <?php if($menu["parent"] == "masterdata") echo "class='active open'"; ?>>
            <a href=""> <i class="fa fa-file-text-o"></i> Master Data <i class="fa arrow"></i> </a>
            <ul>
              <li <?php if($menu["child"] == "checkpoint") echo "class='active'";?>> <a href="master/checkpoint">Checkpoints</a> </li>
              <li <?php if($menu["child"] == "servicegroup") echo "class='active'";?>> <a href="master/servicegroup">Service Group</a> </li>
            </ul>
          </li>
          <li <?php if($menu["parent"] == "shipment") echo "class='active'";?>>
            <a href="home"> <i class="fa fa-truck"></i> Shipment </a>
          </li>
          <li <?php if($menu["parent"] == "order") echo "class='active open'"; ?>>
            <a href=""> <i class="fa fa-bars"></i> Order <i class="fa arrow"></i> </a>
            <ul>
              <li <?php if($menu["child"] == "orders") echo "class='active'";?>> <a href="order/orders">Orders</a> </li>
              <li <?php if($menu["child"] == "create") echo "class='active'";?>> <a href="order/create">Create</a> </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <footer class="sidebar-footer">
        <ul class="nav metismenu" id="customize-menu">
            <li>
                <a href=""> <i class="fa fa-cog"></i> Customize </a>
            </li>
        </ul>
    </footer>
  </div>
</aside>
<div class="sidebar-overlay" id="sidebar-overlay"></div>
