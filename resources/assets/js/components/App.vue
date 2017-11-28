<template>
    <main>
        <app-sidebar></app-sidebar>
        
        <div class="page-content column">
            <app-header></app-header>
            
            <div class="page-content__main container-fluid">
                <router-view></router-view>
            </div>
            
            <app-footer></app-footer>
        </div>
    </main>
</template>
