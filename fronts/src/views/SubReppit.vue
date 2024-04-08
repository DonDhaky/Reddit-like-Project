<script setup>
import { RouterLink, RouterView } from 'vue-router'
import { useRouter } from 'vue-router'

const router = useRouter();
const editNote = () => {
    // console.log('test')
    router.push({ name:'registration'})
};

    
</script>

<template>
    <div class="leftmenu">
        <div class="login">
                <button class="btnlogin" @click="editNote">Log In</button>
        </div>
        <div class="Menu">
                <ul class="divsubreppit">
                    <li class="subreppit">Gaming</li>
                    <li class="subreppit">Funny</li>
                    <li class="subreppit">Series</li>
                </ul>
        </div>
        <div class="subMenu">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><circle cx="9.67" cy="13" r="1.001"></circle><path d="M14.09 15.391A3.28 3.28 0 0 1 12 16a3.271 3.271 0 0 1-2.081-.63.27.27 0 0 0-.379.38c.71.535 1.582.809 2.471.77a3.811 3.811 0 0 0 2.469-.77v.04a.284.284 0 0 0 .006-.396.28.28 0 0 0-.396-.003zm.209-3.351a1 1 0 0 0 0 2l-.008.039c.016.002.033 0 .051 0a1 1 0 0 0 .958-1.038 1 1 0 0 0-1.001-1.001z"></path><path d="M12 2C6.479 2 2 6.477 2 12c0 5.521 4.479 10 10 10s10-4.479 10-10c0-5.523-4.479-10-10-10zm5.859 11.33c.012.146.012.293 0 .439 0 2.24-2.609 4.062-5.83 4.062s-5.83-1.82-5.83-4.062a2.681 2.681 0 0 1 0-.439 1.46 1.46 0 0 1-.455-2.327 1.458 1.458 0 0 1 2.063-.063 7.145 7.145 0 0 1 3.899-1.23l.743-3.47v-.004A.313.313 0 0 1 12.82 6l2.449.49a1.001 1.001 0 1 1-.131.61L13 6.65l-.649 3.12a7.123 7.123 0 0 1 3.85 1.23 1.46 1.46 0 0 1 2.469 1c.01.563-.307 1.08-.811 1.33z"></path></svg>
                <a href="">About</a>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 6a3.939 3.939 0 0 0-3.934 3.934h2C10.066 8.867 10.934 8 12 8s1.934.867 1.934 1.934c0 .598-.481 1.032-1.216 1.626a9.208 9.208 0 0 0-.691.599c-.998.997-1.027 2.056-1.027 2.174V15h2l-.001-.633c.001-.016.033-.386.441-.793.15-.15.339-.3.535-.458.779-.631 1.958-1.584 1.958-3.182A3.937 3.937 0 0 0 12 6zm-1 10h2v2h-2z"></path><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
                <a href="">Help</a>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M4.626 8.878a7.937 7.937 0 0 1 1.71-2.541 7.92 7.92 0 0 1 2.542-1.71 8.12 8.12 0 0 1 6.13-.041A2.49 2.49 0 0 0 17.5 7C18.886 7 20 5.886 20 4.5S18.886 2 17.5 2c-.689 0-1.312.276-1.763.725-2.431-.973-5.223-.958-7.635.059-1.19.5-2.26 1.22-3.18 2.139A9.98 9.98 0 0 0 2 12h2c0-1.086.211-2.136.626-3.122zm14.747 6.244c-.401.952-.977 1.808-1.71 2.541s-1.589 1.309-2.542 1.71a8.12 8.12 0 0 1-6.13.041A2.488 2.488 0 0 0 6.5 17C5.114 17 4 18.114 4 19.5S5.114 22 6.5 22c.689 0 1.312-.276 1.763-.725A9.973 9.973 0 0 0 12 22a9.983 9.983 0 0 0 9.217-6.102A9.992 9.992 0 0 0 22 12h-2a7.993 7.993 0 0 1-.627 3.122z"></path><path d="M12 7.462c-2.502 0-4.538 2.036-4.538 4.538S9.498 16.538 12 16.538c2.502 0 4.538-2.036 4.538-4.538S14.502 7.462 12 7.462z"></path></svg>
                <a href="">Tools</a>
            </div>
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

.subMenu{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 100vh;
    height: 20%;
}

.subMenu > div{
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.subMenu > div svg{
    margin-right: 10px;
}

.subMenu > div a{
    text-decoration: none;
    color: black;
}
</style>