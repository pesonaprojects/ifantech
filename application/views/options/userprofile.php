<?php 
$userid = $this->session->userdata('userid');
$GetUsers = $this->db->get_where('i_users', ['id' => $userid])->row_array();
?>
<li class="nav-item navbar-dropdown dropdown-user dropdown">
    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
        <div class="avatar avatar-online">
            <img src="<?=base_url().'assets/img/users/'.$GetUsers['image']?>" alt class="rounded-circle" />
        </div>
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
        <li>
            <a class="dropdown-item" href="<?=base_url().'account/setting'?>">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                            <img src="<?=base_url().'assets/img/users/'.$GetUsers['image']?>" alt class="rounded-circle" />
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <span class="fw-semibold d-block lh-1"><?=$this->session->userdata('fullname')?></span>
                        <?php
                        $role = $this->session->userdata('role');
                        if ($role == 1) {
                            $datarole = "Administrator";
                        } else {
                            $datarole = "Member";
                        }
                        ?>
                        <small><?=$datarole?></small>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
        <li>
            <a class="dropdown-item" href="<?=base_url().'account/setting'?>">
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle" data-i18n="Settings">Settings</span>
            </a>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
        <li>
            <a class="dropdown-item" href="<?=base_url().'logout'?>">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle" data-i18n="Log Out">Log Out</span>
            </a>
        </li>
    </ul>
</li>