<?php
function sidebarFunc() {
$sidebar = '
<div class="sidebar mt-5" id="sidebar">
    <div class="sidebar__container mt-4">
        <div>
            <a href="#" class="d-flex rounded active">
                <div class="sidebar__icon d-flex align-items-center justify-content-center">
                    <i class="bi bi-house"></i>
                </div>
                <div class="sidebar__address my-auto">
                    <p class="my-auto">Home</p>
                </div>
            </a>
        </div>
        <div>
            <a href="#" class="d-flex rounded">
                <div class="sidebar__icon d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                </div>
                <div class="sidebar__address my-auto">
                    <p class="my-auto">My profile</p>
                </div>
            </a>
        </div>
        <div id="accordionFlushExample">
            <div class="accordion-item rounded">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <div class="sidebar__icon d-flex align-items-center justify-content-center">
                            <i class="bi bi-bug"></i>
                        </div>
                        <div class="sidebar__address my-auto">
                            <p class="my-auto">Vulnerability</p>
                        </div>
                        <div class="sidebar__arrow">
                            <i class="bi bi-chevron-compact-down"></i>
                        </div>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>  
                            <a href="./">
                                <li class="active">
                                    <p>Introdusão</p>
                                </li>
                            </a>
                            <a href="./?page=xss_refleted">
                                <li>
                                    <p>XSS Refleted</p>
                                </li>
                            </a>
                            <a href="./?page=xss_stored">
                                <li>
                                    <p>XSS Stored</p>
                                </li>
                            </a>
                            <a href="./?page=xss_dom">
                                <li>
                                    <p>XSS DOM</p>
                                </li>
                            </a>
                            <a href="./?page=sqli">
                                <li>
                                    <p>SQL Injection</p>
                                </li>
                            </a>
                            <a href="./?page=sqli_blind">
                                <li>
                                    <p>SQL Injection Blind</p>
                                </li>
                            </a>
                            <a href="./?page=brute">
                                <li>
                                    <p>Brute Force</p>
                                </li>
                            </a>
                            <a href="./?page=csrf">
                                <li>
                                    <p>CSRF</p>
                                </li>
                            </a>
                            <a href="./?page=lfi">
                                <li>
                                    <p>LFI</p>
                                </li>
                            </a>
                            <a href="./?page=rfi">
                                <li>
                                    <p>RFI</p>
                                </li>
                            </a>
                            <a href="./?page=ldap">
                                <li>
                                    <p>LDAP</p>
                                </li>
                            </a>
                            <a href="./?page=traversal">
                                <li>
                                    <p>Directory Traversal</p>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a href="#" class="d-flex rounded">
                <div class="sidebar__icon d-flex align-items-center justify-content-center">
                    <i class="bi bi-lock"></i>
                </div>
                <div class="sidebar__address my-auto">
                    <p class="my-auto">Crytography</p>
                </div>
            </a>
        </div>
        <div>
            <a href="#" class="d-flex rounded">
                <div class="sidebar__icon d-flex align-items-center justify-content-center">
                    <i class="bi bi-book"></i>
                </div>
                <div class="sidebar__address my-auto">
                    <p class="my-auto">Tutorial</p>
                </div>
            </a>
        </div>
        <div id="accordionFlushExample">
            <div class="accordion-item rounded">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                <div class="sidebar__icon d-flex align-items-center justify-content-center">
                    <i class="bi bi-gear"></i>
                </div>
                <div class="sidebar__address my-auto">
                    <p class="my-auto">Config</p>
                </div>
                <div class="sidebar__arrow">
                    <i class="bi bi-chevron-compact-down"></i>
                </div>
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ul>
                        <a href="#">
                            <li>
                                <p>Action</p>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <p>Configurações</p>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <p>Logout</p>
                            </li>
                        </a>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
';
echo $sidebar;
}