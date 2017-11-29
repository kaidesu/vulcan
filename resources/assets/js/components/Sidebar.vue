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
                        <router-link :to="{ name: 'login' }" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="property-1"></app-icon>
                            </span>
                            Login
                        </router-link>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="/" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="property-1"></app-icon>
                            </span>
                            Home
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="heart-1"></app-icon>
                            </span>
                            Health
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="folder-1"></app-icon>
                            </span>
                            Files
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="guide-1"></app-icon>
                            </span>
                            Notes
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="conference-1"></app-icon>
                            </span>
                            People
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="read-email-1"></app-icon>
                            </span>
                            Email
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="message-bubble-1"></app-icon>
                            </span>
                            Chat
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="headphones-1"></app-icon>
                            </span>
                            Music
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="tv-display-1"></app-icon>
                            </span>
                            Movies & TV
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="newspaper-1"></app-icon>
                            </span>
                            News
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="handshake-1"></app-icon>
                            </span>
                            Companion
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="#" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="gear-1"></app-icon>
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
