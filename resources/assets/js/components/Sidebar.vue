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
                        <router-link to="/" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="home"></app-icon>
                            </span>
                            Home
                        </router-link>
                    </li>
                    
                    <li class="sidebar__item">
                        <router-link to="notes" class="sidebar__link">
                            <span class="sidebar__icon">
                                <app-icon name="book"></app-icon>
                            </span>
                            Notes
                        </router-link>
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
