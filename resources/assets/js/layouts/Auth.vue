<template>
    <main v-cloak>
        <div class="page-content column">
            <div class="page-content__auth container-fluid bg-primary text-white">
                <h1 class="mb-4">VULCAN</h1>
                <app-icon name="microchip fa-3x"></app-icon>
            </div>
        </div>
        
        <div class="page-content column">
            <div class="page-content__auth bg-info">
                <router-view></router-view>
            </div>
        </div>
    </main>
</template>
