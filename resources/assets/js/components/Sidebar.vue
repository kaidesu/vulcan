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
                            <span class="fas fa-home fa-fw sidebar__icon"></span>
                            Home
                        </a>
                    </li>
                    
                    <li class="sidebar__item">
                        <a href="/modules" class="sidebar__link">
                            <span class="fas fa-microchip fa-fw sidebar__icon"></span>
                            Modules
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
