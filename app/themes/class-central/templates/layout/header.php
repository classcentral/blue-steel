<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" title="MOOC aggregator">
                <span class="cc-logo-navbar"></span>
                <svg role="logo" aria-label="class central logo" viewBox="0 0 332 32" class="class-central-logo">
                    <use xlink:href="#icon-cc-logo"></use>
                </svg>
                Class Central
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle nav-title" title="Browse MOOCs by their Start date" data-toggle="dropdown">
                        Courses
                        <b class="caret">
                            <svg class="icon icon-cc-logo7" viewBox="0 0 32 32"><use xlink:href="#icon-cc-logo7"></use></svg>
                        </b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/trending" title="Trending free online courses - MOOCs" onclick="_gaq.push(['_trackEvent', 'navbar-clicks', 'Courses', 'Trending'])">Trending</a></li>
                        <li><a href="/courses/recent" title="Recently started or starting soon - MOOCs" onclick="_gaq.push(['_trackEvent', 'navbar-clicks', 'Courses', 'recent'])">Recently started or starting soon</a></li>
                        <li><a href="/courses/recent" title="Just Announced - MOOCs" onclick="_gaq.push(['_trackEvent', 'navbar-clicks', 'Courses', 'recentlyAdded'])">Just Announced</a></li>
                        <li><a href="/courses/ongoing" title="Courses in Progress - MOOCs" onclick="_gaq.push(['_trackEvent', 'navbar-clicks', 'Courses', 'ongoing'])">Courses in Progress</a></li>
                        <li><a href="/courses/upcoming" title="Future courses - MOOCs" onclick="_gaq.push(['_trackEvent', 'navbar-clicks', 'Courses', 'upcoming'])">Future courses</a></li>
                        <li><a href="/courses/selfpaced" title="Self Paced - MOOCs" onclick="_gaq.push(['_trackEvent', 'navbar-clicks', 'Courses', 'selfpaced'])">Self Paced</a></li>
                        <li><a href="/courses/past" title="Finished courses - MOOCs" onclick="_gaq.push(['_trackEvent', 'navbar-clicks', 'Courses', 'past'])">Finished courses</a></li>
                    </ul>
                </li>
                <li><a href="/subjects" class="nav-title" title="Subjects" onclick="_gaq.push(['_trackEvent', 'navbar-clicks', 'Subjects'])">Subjects</a></li>
                <li><a href="/credentials" class="nav-title" title="Subjects" onclick="_gaq.push(['_trackEvent', 'navbar-clicks', 'Credentials'])">Credentials</a></li>
                <li><a href="/report" class="nav-title" title="MOOC News, Interviews, and Analysis" onClick="_gaq.push(['_trackEvent', 'navbar-clicks', 'MOOC Report'])">MOOC Report</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="social-icon">
                    <a href="http://www.facebook.com/classcentral" target="_blank" onmousedown="_gaq.push(['_trackEvent', 'navbar-clicks', 'Social Media','Facebook'])">
                        Facebook
                        <span class="fb-icon-png"></span>
                        <svg class="icon icon-facebook" viewBox="0 0 32 32"><use xlink:href="#icon-facebook"></use></svg>
                    </a>
                </li>
                <li class="social-icon">
                    <a href="https://twitter.com/classcentral" target="_blank" onmousedown="_gaq.push(['_trackEvent', 'navbar-clicks', 'Social Media','Twitter'])">
                        Twitter
                        <span class="twitter-icon-png"></span>
                        <svg class="icon icon-twitter" viewBox="0 0 32 32"><use xlink:href="#icon-twitter"></use></svg>
                    </a>
                </li>
                <li class="social-icon">
                    <a href="https://plus.google.com/+ClassCentral" target="_blank" onmousedown="_gaq.push(['_trackEvent', 'navbar-clicks', 'Social Media','Google+'])">
                        Google plus
                        <span class="gplus-icon-png"></span>
                        <svg class="icon icon-google_follow" viewBox="0 0 32 32"><use xlink:href="#icon-google_follow"></use></svg>
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
