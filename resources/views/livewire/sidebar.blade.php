<div>
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li class="menu-title">{{ env('APP_NAME') }}</li>
                <li><a href="{{ route('home') }}" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.5">
                                    <path d="M22 20H11V13H22V20ZM9 20H2V13H9V20ZM22 11H2V4H22V11Z" fill="white" />
                                </g>
                            </svg>
                        </div>
                        <span class="nav-text">Tableau de bord</span>
                    </a>
                </li>
                <li class="menu-title">SITE WEB</li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="white"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 5H7M21 5H11M3 12H15M21 12H19M3 19H5M21 19H9" stroke="white" stroke-width="2"
                                    stroke-linecap="round" />
                                <circle cx="9" cy="5" r="2" stroke="black" stroke-width="2"
                                    stroke-linecap="round" />
                                <circle cx="17" cy="12" r="2" stroke="black" stroke-width="2"
                                    stroke-linecap="round" />
                                <circle cx="7" cy="19" r="2" stroke="black" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <span class="nav-text">Paramétrage su site</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="app-calender.html">Services</a></li>
                        <li><a href="app-calender.html">Competences</a></li>
                        <li><a href="app-calender.html">Portfolio</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
