<template>
    <nav class="navbar navbar-expand-lg">
        <div class="container h-100">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul>
                    <router-link to="/">Home</router-link>
                    |
                    <router-link to="/about">About</router-link
                    >|
                    <router-link to="/service">Services</router-link
                    >|
                    <router-link to="/contact">Contact</router-link
                    >|
                    <router-link to="/logi">Login</router-link
                    >/
                    <router-link to="/register">Register</router-link
                    >
                </ul>
            </div>
        </div>
    </nav>
    <router-view/>    
</template>

<script lang="ts" setup></script>

<style></style>
