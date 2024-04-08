<script setup>
    
</script>

<template>
    <div class="leftmenu">
        <div class="login">
                <a href="" class="btnlogin">Log In</a>
        </div>
        <div class="Menu">
                <ul class="divsubreppit">
                    <li class="subreppit">Gaming</li>
                    <li class="subreppit">Funny</li>
                    <li class="subreppit">Series</li>
                </ul>
        </div>
    </div>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.leftmenu{
    width: 200px;
}
.login{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    text-align: center;
}

.btnlogin{
    text-decoration: none;
    list-style-type: none;
    background-color: #FF4500;
    border: solid 1px #808080;
    border-radius: 5px;
    color: white;
    width: 60%;
    padding: 5px 10px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
}

.btnlogin:hover{
    background-color: #ee3f00;
}

.divsubreppit{
    display: table;
    margin: 0 auto;
    width: 80%;
    padding: 0;
    background-color: #FAFAFA;
    border: solid 1px #808080;
    border-radius: 5px;
    box-shadow: 0px 0px 5px 0.2px rgba(64, 64, 64, 0.78)
    
}
.subreppit{
    text-decoration: none;
    list-style-type: none;
    text-align: center;
    margin: 5px 10px;
    padding: 5px 10px;
    background-color: #B8B8B8;
    border: solid 1px #808080;
    border-radius: 5px;
    color: white;
    font-family: 'Poppins', sans-serif;
    transition: 0.3s;
}

.subreppit:hover{
    background-color: #FF4500;
    color: #FAFAFA;
    cursor: pointer;
}

</style>