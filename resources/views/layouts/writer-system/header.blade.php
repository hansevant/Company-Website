
<header>
    {{-- Search & Profile Bar --}}
    <section class="search-profile-bar">
        {{-- Search Bar --}}
        <form action="" class="form-header">
            {{-- Seacrh Input --}}
            <input type="text" name="" id="" placeholder="Search" />

            {{-- Search Icon --}}
            <svg width="25" height="25" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7422 10.3439C12.5329 9.2673 13 7.9382 13 6.5C13 2.91015 10.0899 0 6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13C7.93858 13 9.26801 12.5327 10.3448 11.7415L10.3439 11.7422C10.3734 11.7822 10.4062 11.8204 10.4424 11.8566L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L11.8566 10.4424C11.8204 10.4062 11.7822 10.3734 11.7422 10.3439ZM12 6.5C12 9.53757 9.53757 12 6.5 12C3.46243 12 1 9.53757 1 6.5C1 3.46243 3.46243 1 6.5 1C9.53757 1 12 3.46243 12 6.5Z" fill="#212529"/>
            </svg>
        </form>

        {{-- Mobile Header --}}
        <div class="mobile-section-header">
            {{-- Company Logo Mobile --}}
            <img src="{{ asset('assets/img/logo.png') }}" alt="Career Network's Logo" class="company-logo" />

            <div class="btn-mobile-section">
                <div class="btn-wrapper" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.00461 2.0023C4.94293 2.0023 3.92473 2.42406 3.17401 3.17478C2.42329 3.9255 2.00154 4.9437 2.00154 6.00538C2.00154 7.06706 2.42329 8.08526 3.17401 8.83598C3.92473 9.5867 4.94293 10.0085 6.00461 10.0085C7.06629 10.0085 8.08449 9.5867 8.83521 8.83598C9.58593 8.08526 10.0077 7.06706 10.0077 6.00538C10.0077 4.9437 9.58593 3.9255 8.83521 3.17478C8.08449 2.42406 7.06629 2.0023 6.00461 2.0023ZM1.13549e-07 6.00538C-0.000120482 5.06036 0.222814 4.12865 0.650671 3.28603C1.07853 2.44341 1.69923 1.71368 2.46229 1.15618C3.22535 0.598679 4.10922 0.229154 5.04202 0.077659C5.97482 -0.0738365 6.9302 -0.00302481 7.83048 0.284335C8.73075 0.571695 9.55049 1.06749 10.223 1.73139C10.8955 2.3953 11.4019 3.20856 11.7008 4.10505C11.9998 5.00154 12.0829 5.95593 11.9435 6.89061C11.8041 7.82529 11.446 8.71386 10.8984 9.48405L15.7191 14.3048C15.9014 14.4935 16.0022 14.7463 16 15.0087C15.9977 15.2711 15.8924 15.5221 15.7069 15.7076C15.5213 15.8932 15.2703 15.9984 15.0079 16.0007C14.7455 16.003 14.4927 15.9021 14.304 15.7198L9.48428 10.9001C8.58596 11.5389 7.52913 11.9181 6.42961 11.9961C5.3301 12.0741 4.23032 11.848 3.2508 11.3424C2.27127 10.8369 1.4498 10.0715 0.876397 9.13013C0.302993 8.18873 -0.000214215 7.10766 1.13549e-07 6.00538Z" fill="#3A3F44"/>
                    </svg>
                </div>

                <div class="btn-wrapper btn-aside" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.14286C0 0.839753 0.120408 0.549063 0.334735 0.334735C0.549062 0.120408 0.839753 0 1.14286 0H14.8571C15.1602 0 15.4509 0.120408 15.6653 0.334735C15.8796 0.549063 16 0.839753 16 1.14286C16 1.44596 15.8796 1.73665 15.6653 1.95098C15.4509 2.16531 15.1602 2.28571 14.8571 2.28571H1.14286C0.839753 2.28571 0.549062 2.16531 0.334735 1.95098C0.120408 1.73665 0 1.44596 0 1.14286ZM0 6.85714C0 6.55404 0.120408 6.26335 0.334735 6.04902C0.549062 5.83469 0.839753 5.71429 1.14286 5.71429H14.8571C15.1602 5.71429 15.4509 5.83469 15.6653 6.04902C15.8796 6.26335 16 6.55404 16 6.85714C16 7.16025 15.8796 7.45094 15.6653 7.66527C15.4509 7.87959 15.1602 8 14.8571 8H1.14286C0.839753 8 0.549062 7.87959 0.334735 7.66527C0.120408 7.45094 0 7.16025 0 6.85714ZM0 12.5714C0 12.2683 0.120408 11.9776 0.334735 11.7633C0.549062 11.549 0.839753 11.4286 1.14286 11.4286H14.8571C15.1602 11.4286 15.4509 11.549 15.6653 11.7633C15.8796 11.9776 16 12.2683 16 12.5714C16 12.8745 15.8796 13.1652 15.6653 13.3796C15.4509 13.5939 15.1602 13.7143 14.8571 13.7143H1.14286C0.839753 13.7143 0.549062 13.5939 0.334735 13.3796C0.120408 13.1652 0 12.8745 0 12.5714Z" fill="#3A3F44"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Profile Section --}}
        <div class="profile-section-container">
            {{-- Search Icon --}}
            <svg class="btn-search" data-bs-toggle="modal" data-bs-target="#searchModal" width="25" height="25" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7422 10.3439C12.5329 9.2673 13 7.9382 13 6.5C13 2.91015 10.0899 0 6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13C7.93858 13 9.26801 12.5327 10.3448 11.7415L10.3439 11.7422C10.3734 11.7822 10.4062 11.8204 10.4424 11.8566L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L11.8566 10.4424C11.8204 10.4062 11.7822 10.3734 11.7422 10.3439ZM12 6.5C12 9.53757 9.53757 12 6.5 12C3.46243 12 1 9.53757 1 6.5C1 3.46243 3.46243 1 6.5 1C9.53757 1 12 3.46243 12 6.5Z" fill="#212529"/>
            </svg>

            <div class="notification-section">
                <span class="notification-count">2</span>
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.7773 22.5C13.2961 22.5 14.5273 21.2688 14.5273 19.75H9.02734C9.02734 21.2688 10.2586 22.5 11.7773 22.5Z" fill="#012970"/>
                    <path d="M11.7773 3.13759L10.6812 3.35897C8.16869 3.8664 6.27737 6.08887 6.27737 8.75C6.27737 9.61326 6.09262 11.7712 5.64643 13.8955C5.42493 14.95 5.12859 16.048 4.73472 17H18.82C18.4261 16.048 18.1298 14.95 17.9083 13.8955C17.4621 11.7712 17.2774 9.61325 17.2774 8.75C17.2774 6.08885 15.386 3.86637 12.8735 3.35896L11.7773 3.13759ZM20.3289 17C20.6359 17.6152 20.9919 18.1014 21.4023 18.375H2.15234C2.56282 18.1014 2.91883 17.6152 3.22581 17C4.46127 14.5241 4.90237 9.95885 4.90237 8.75C4.90237 5.42159 7.26762 2.64562 10.409 2.01118C10.4046 1.96638 10.4023 1.92096 10.4023 1.875C10.4023 1.11561 11.018 0.5 11.7773 0.5C12.5367 0.5 13.1523 1.11561 13.1523 1.875C13.1523 1.92095 13.1501 1.96638 13.1457 2.01117C16.2871 2.64558 18.6524 5.42157 18.6524 8.75C18.6524 9.95885 19.0934 14.5241 20.3289 17Z" fill="#012970"/>
                </svg>
            </div>

            <a class="profile" href="{{ route('login_writer') }}">
                <img alt="" src="{{ asset('assets/img/profile.png') }}" class="profile-picture" />
                <p>Rifky Chirmansyah</p>
            </a>
        </div>
    </section>

    {{-- Header Dynamic & Menu Options --}}
    <section class="header-dynamic-options">
        {{-- Heading --}}
        <div class="heading-container">
            @if ($title === "Schedule")
                <h1 class="heading">Jadwal Postingan</h1>
                <p>Anda dapat menjadwalkan setiap artikel yang dibuat melalui halaman ini</p>
            @endif
        </div>

        @if ($title !== "Create Blog")
            <div class="options">
                @if ($title === "Schedule")
                    <a href="" class="option-item create-blog">
                        <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1882 1.26862L14.1892 2.01824C16.9439 2.23413 18.7635 4.11119 18.7665 6.98975L18.7773 15.4155C18.7813 18.554 16.8096 20.485 13.6491 20.49L5.92923 20.5C2.78854 20.504 0.79216 18.527 0.788211 15.3795L0.77735 7.05272C0.773401 4.15517 2.52887 2.28311 5.28351 2.03024L5.28253 1.28061C5.28154 0.840832 5.60736 0.509997 6.04178 0.509997C6.47621 0.508998 6.80202 0.838833 6.80301 1.27861L6.804 1.97826L12.6687 1.97027L12.6677 1.27062C12.6668 0.830837 12.9926 0.501002 13.427 0.500002C13.8515 0.499003 14.1872 0.828838 14.1882 1.26862ZM2.29882 7.36157L17.247 7.34158V6.99175C17.2045 4.84283 16.1264 3.71539 14.1912 3.54748L14.1922 4.31709C14.1922 4.74688 13.8575 5.0877 13.4329 5.0877C12.9985 5.0887 12.6717 4.74887 12.6717 4.31909L12.6707 3.5095L6.80597 3.51749L6.80696 4.32609C6.80696 4.75687 6.48213 5.0967 6.04771 5.0967C5.61328 5.0977 5.28648 4.75887 5.28648 4.32809L5.28549 3.55847C3.3602 3.75137 2.29487 4.88281 2.29784 7.05072L2.29882 7.36157ZM13.0173 11.9043V11.9153C13.0271 12.3751 13.4023 12.7239 13.8575 12.7139C14.3018 12.7029 14.6562 12.3221 14.6463 11.8623C14.6256 11.4225 14.2692 11.0637 13.8259 11.0647C13.3717 11.0747 13.0163 11.4445 13.0173 11.9043ZM13.8328 16.392C13.3786 16.382 13.0123 16.0032 13.0113 15.5435C13.0015 15.0837 13.3658 14.7029 13.82 14.6919H13.8298C14.2939 14.6919 14.67 15.0707 14.67 15.5405C14.671 16.0102 14.2958 16.391 13.8328 16.392ZM8.94946 11.9203C8.96921 12.3801 9.34538 12.7389 9.79955 12.7189C10.2438 12.6979 10.5983 12.3181 10.5786 11.8583C10.5677 11.4085 10.2024 11.0587 9.75809 11.0597C9.30391 11.0797 8.94848 11.4605 8.94946 11.9203ZM9.8035 16.3471C9.34933 16.3671 8.97415 16.0082 8.95341 15.5485C8.95341 15.0887 9.30786 14.7089 9.76203 14.6879C10.2063 14.6869 10.5726 15.0367 10.5825 15.4855C10.6032 15.9463 10.2478 16.3261 9.8035 16.3471ZM4.88167 11.9553C4.90142 12.415 5.27759 12.7749 5.73176 12.7539C6.17606 12.7339 6.53051 12.3531 6.50978 11.8933C6.4999 11.4435 6.13459 11.0937 5.68931 11.0947C5.23514 11.1147 4.88069 11.4955 4.88167 11.9553ZM5.73571 16.3521C5.28154 16.3731 4.90636 16.0132 4.88562 15.5535C4.88463 15.0937 5.24007 14.7129 5.69424 14.6929C6.13854 14.6919 6.50484 15.0417 6.51471 15.4915C6.53545 15.9513 6.181 16.3321 5.73571 16.3521Z" fill="white"/>
                        </svg>
                        <span>Jadwalkan Artikel</span>
                    </a>
                @endif

                @if (!isset($read))

                    @if ($title === "Blogs")
                        <a href="{{ route('create-writer') }}" class="option-item create-blog">
                            <span>Create New</span>
                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 8.99805H8V13.998C8 14.2633 7.89464 14.5176 7.70711 14.7052C7.51957 14.8927 7.26522 14.998 7 14.998C6.73478 14.998 6.48043 14.8927 6.29289 14.7052C6.10536 14.5176 6 14.2633 6 13.998V8.99805H1C0.734784 8.99805 0.48043 8.89269 0.292893 8.70515C0.105357 8.51762 0 8.26326 0 7.99805C0 7.73283 0.105357 7.47848 0.292893 7.29094C0.48043 7.1034 0.734784 6.99805 1 6.99805H6V1.99805C6 1.73283 6.10536 1.47848 6.29289 1.29094C6.48043 1.1034 6.73478 0.998047 7 0.998047C7.26522 0.998047 7.51957 1.1034 7.70711 1.29094C7.89464 1.47848 8 1.73283 8 1.99805V6.99805H13C13.2652 6.99805 13.5196 7.1034 13.7071 7.29094C13.8946 7.47848 14 7.73283 14 7.99805C14 8.26326 13.8946 8.51762 13.7071 8.70515C13.5196 8.89269 13.2652 8.99805 13 8.99805Z" fill="white"/>
                            </svg>
                        </a>
                    @endif
                @else
                    <a href="" class="option-item delete">
                        <span>Delete</span>
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 16C7.26522 16 7.51957 15.8946 7.70711 15.7071C7.89464 15.5196 8 15.2652 8 15V9C8 8.73478 7.89464 8.48043 7.70711 8.29289C7.51957 8.10536 7.26522 8 7 8C6.73478 8 6.48043 8.10536 6.29289 8.29289C6.10536 8.48043 6 8.73478 6 9V15C6 15.2652 6.10536 15.5196 6.29289 15.7071C6.48043 15.8946 6.73478 16 7 16ZM17 4H13V3C13 2.20435 12.6839 1.44129 12.1213 0.87868C11.5587 0.316071 10.7956 0 10 0H8C7.20435 0 6.44129 0.316071 5.87868 0.87868C5.31607 1.44129 5 2.20435 5 3V4H1C0.734784 4 0.48043 4.10536 0.292893 4.29289C0.105357 4.48043 0 4.73478 0 5C0 5.26522 0.105357 5.51957 0.292893 5.70711C0.48043 5.89464 0.734784 6 1 6H2V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H13C13.7956 20 14.5587 19.6839 15.1213 19.1213C15.6839 18.5587 16 17.7956 16 17V6H17C17.2652 6 17.5196 5.89464 17.7071 5.70711C17.8946 5.51957 18 5.26522 18 5C18 4.73478 17.8946 4.48043 17.7071 4.29289C17.5196 4.10536 17.2652 4 17 4ZM7 3C7 2.73478 7.10536 2.48043 7.29289 2.29289C7.48043 2.10536 7.73478 2 8 2H10C10.2652 2 10.5196 2.10536 10.7071 2.29289C10.8946 2.48043 11 2.73478 11 3V4H7V3ZM14 17C14 17.2652 13.8946 17.5196 13.7071 17.7071C13.5196 17.8946 13.2652 18 13 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V6H14V17ZM11 16C11.2652 16 11.5196 15.8946 11.7071 15.7071C11.8946 15.5196 12 15.2652 12 15V9C12 8.73478 11.8946 8.48043 11.7071 8.29289C11.5196 8.10536 11.2652 8 11 8C10.7348 8 10.4804 8.10536 10.2929 8.29289C10.1054 8.48043 10 8.73478 10 9V15C10 15.2652 10.1054 15.5196 10.2929 15.7071C10.4804 15.8946 10.7348 16 11 16Z" fill="#EF4444"/>
                        </svg>
                    </a>

                    <a href="" class="option-item create-blog">
                        <span>Edit</span>
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 18.9995H3.75L14.81 7.93951L11.06 4.18951L0 15.2495V18.9995ZM2 16.0795L11.06 7.01952L11.98 7.93951L2.92 16.9995H2V16.0795ZM15.37 1.28951C15.2775 1.19681 15.1676 1.12326 15.0466 1.07308C14.9257 1.0229 14.796 0.99707 14.665 0.99707C14.534 0.99707 14.4043 1.0229 14.2834 1.07308C14.1624 1.12326 14.0525 1.19681 13.96 1.28951L12.13 3.11951L15.88 6.86951L17.71 5.03951C17.8027 4.947 17.8762 4.83711 17.9264 4.71614C17.9766 4.59517 18.0024 4.46548 18.0024 4.33451C18.0024 4.20355 17.9766 4.07386 17.9264 3.95289C17.8762 3.83192 17.8027 3.72203 17.71 3.62951L15.37 1.28951Z" fill="white"/>
                        </svg>
                    </a>
                @endif

            </div>
        @else
            <span class="option-item preview">
                <span>Preview</span>
            </span>
        @endif
    </section>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <a class="profile" href="{{ route('login_writer') }}">
                    <img alt="" src="{{ asset('assets/img/profile.png') }}" class="profile-picture" />
                    <p>Rifky Chirmansyah</p>
                </a>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="menus">
                {{-- Home Menu --}}
                <a href="{{ route('dashboard-writer') }}" class="menu-item {{ $active == "Home"? "active" : "" }}">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.13478 18.7733V15.7156C7.13478 14.9351 7.77217 14.3023 8.55844 14.3023H11.4326C11.8102 14.3023 12.1723 14.4512 12.4393 14.7163C12.7063 14.9813 12.8563 15.3408 12.8563 15.7156V18.7733C12.8539 19.0978 12.9821 19.4099 13.2124 19.6402C13.4427 19.8705 13.756 20 14.0829 20H16.0438C16.9596 20.0024 17.8388 19.6428 18.4872 19.0008C19.1356 18.3588 19.5 17.487 19.5 16.5778V7.86686C19.5 7.13246 19.1721 6.43584 18.6046 5.96467L11.934 0.675869C10.7737 -0.251438 9.11111 -0.221498 7.98539 0.746979L1.46701 5.96467C0.872741 6.42195 0.517552 7.12064 0.5 7.86686V16.5689C0.5 18.4639 2.04738 20 3.95617 20H5.87229C6.55123 20 7.103 19.4562 7.10792 18.7822L7.13478 18.7733Z" fill="#D2D2D2" class="{{ $active == "Home"? "active" : "" }}" />
                    </svg>

                    <span class="menu-text {{ $active == "Home"? "active" : "" }}">Dashboard</span>
                </a>

                {{-- Blog Menu --}}
                <a href="{{ route('blog-writer') }}" class="menu-item {{ $active == "Blogs"? "active" : "" }}">
                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92574 14.39H11.3119C11.7178 14.39 12.0545 14.05 12.0545 13.64C12.0545 13.23 11.7178 12.9 11.3119 12.9H5.92574C5.5198 12.9 5.18317 13.23 5.18317 13.64C5.18317 14.05 5.5198 14.39 5.92574 14.39ZM9.27228 7.9H5.92574C5.5198 7.9 5.18317 8.24 5.18317 8.65C5.18317 9.06 5.5198 9.39 5.92574 9.39H9.27228C9.67822 9.39 10.0149 9.06 10.0149 8.65C10.0149 8.24 9.67822 7.9 9.27228 7.9ZM16.3381 7.02561C16.5708 7.02292 16.8242 7.02 17.0545 7.02C17.302 7.02 17.5 7.22 17.5 7.47V15.51C17.5 17.99 15.5099 20 13.0545 20H5.17327C2.59901 20 0.5 17.89 0.5 15.29V4.51C0.5 2.03 2.5 0 4.96535 0H10.2525C10.5099 0 10.7079 0.21 10.7079 0.46V3.68C10.7079 5.51 12.203 7.01 14.0149 7.02C14.4381 7.02 14.8112 7.02316 15.1377 7.02593C15.3917 7.02809 15.6175 7.03 15.8168 7.03C15.9578 7.03 16.1405 7.02789 16.3381 7.02561ZM16.6111 5.566C15.7972 5.569 14.8378 5.566 14.1477 5.559C13.0527 5.559 12.1507 4.648 12.1507 3.542V0.906C12.1507 0.475 12.6685 0.261 12.9646 0.572C13.5004 1.13476 14.2368 1.90834 14.9699 2.67837C15.7009 3.44632 16.4286 4.21074 16.9507 4.759C17.2398 5.062 17.0279 5.565 16.6111 5.566Z" fill="#D2D2D2" class="menu-text {{ $active == "Blogs"? "active" : "" }}" />
                    </svg>

                    <span class="menu-text {{ $active == "Blogs"? "active" : "" }}">Blog</span>
                </a>

                {{-- Schedule Menu --}}
                <a href="{{ route('schedule-writer') }}" class="menu-item {{ $active == "Schedule"? "active" : "" }}">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 20C4.48 20 0 15.53 0 10C0 4.48 4.48 0 10 0C15.53 0 20 4.48 20 10C20 15.53 15.53 20 10 20ZM13.19 13.71C13.31 13.78 13.44 13.82 13.58 13.82C13.83 13.82 14.08 13.69 14.22 13.45C14.43 13.1 14.32 12.64 13.96 12.42L10.4 10.3V5.68C10.4 5.26 10.06 4.93 9.65 4.93C9.24 4.93 8.9 5.26 8.9 5.68V10.73C8.9 10.99 9.04 11.23 9.27 11.37L13.19 13.71Z" fill="#D2D2D2" class="{{ $active == "Schedule"? "active" : "" }}" />
                    </svg>

                    <span class="menu-text {{ $active == "Schedule"? "active" : "" }}">Schedule</span>
                </a>
            </div>
        </div>
    </div>
</header>
