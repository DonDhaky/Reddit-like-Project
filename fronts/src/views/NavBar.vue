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
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


.navbar{
    display: flex;
    justify-content: space-between;
    align-items:center;
    background-color: #B8B8B8;
    /* font-family: 'Poppins', sans-serif; */
    margin-bottom: 20px;
    
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
    font-family: 'Poppins', sans-serif;
    
}
.search {
    width: 300px;
    transition: 0.2s;
}
.search:hover{
    border: solid #FF4500;
}

.search-btn{
    background-color: white;
    transition: 0.3s;
}
.search-btn:hover {
    background-color: #FF4500;
    color: white;
}
</style>