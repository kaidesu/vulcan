<template>
    <aside class="sidebar column">
        <div class="sidebar__header">
            <a href="/">
                Vulcan
            </a>
        </div>
        
        <div class="sidebar__body">
            <nav>
                <ul class="sidebar__menu">
                    <li class="sidebar__item">
                        <a href="/" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="home"></app-icon>
                            </span>
                            Home
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="heart"></app-icon>
                            </span>
                            Health
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="folder"></app-icon>
                            </span>
                            Files
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="book"></app-icon>
                            </span>
                            Notes
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="address-book"></app-icon>
                            </span>
                            People
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="envelope"></app-icon>
                            </span>
                            Email
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="comments"></app-icon>
                            </span>
                            Chat
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="headphones"></app-icon>
                            </span>
                            Music
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="tv"></app-icon>
                            </span>
                            Movies & TV
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="newspaper"></app-icon>
                            </span>
                            News
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="hand-spock"></app-icon>
                            </span>
                            Companion
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="globe"></app-icon>
                            </span>
                            Federation
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="cog"></app-icon>
                            </span>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</template>

<script>
    export default {
        name: 'app-sidebar',
    }
</script>
