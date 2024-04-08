<script setup>
    
</script>

<template>
    <div class="navbar">
        <div class="title">
            <a href="#">
                <img src="../../public/reddit-1.svg" alt="Reppit Icon">
            </a>
        </div>
        <div class="searchbar">
            <form action="" class="search-bar">
                <input class="search" type="search" name="search" required placeholder="Subreppit">
                <button class="search-btn" type="submit"><span>Search</span></button>
            </form>
        </div>
    </div>
</template>

<style scoped>
.navbar{
    display: flex;
    justify-content: space-between;
    align-items:center;
    background-color: #B8B8B8;
}
.title{
    display: flex;
    justify-content: center;
    margin-left: 5%;
}
.searchbar{
    display: flex;
    height: 50px;
    justify-content: center;
    align-items: center;
    flex-grow: 1;
}
.search-bar{
    display: flex;
    justify-content: center;
    margin: 5px 20px;
}
.search,
.search-btn{
    font-size: larger;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 5px 10px;
    border: none;
    border-radius: 5px;
    
}
.search {
    width: 300px;
}
.search-btn{
    background-color: white;
}
.search-btn:hover {
    background-color: #FF4500;
    color: white;
}
</style>