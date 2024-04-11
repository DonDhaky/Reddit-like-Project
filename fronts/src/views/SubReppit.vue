<script setup>
// import { useRouter } from 'vue-router'
// import { ref } from 'vue'

// const router = useRouter();
// const editNote = () => {
//     // console.log('test')
//     router.push({ name:'registration'})
// };

// const subreppits = ref([
//   {
//     id: 1,
//     titre: "Funny",
//   },
//   {
//     id: 2,
//     titre: "Gaming",
//   },
//   {
//     id: 3,
//     titre: "Bridou",
//   }
// ]);

// const apiUrl = "http://localhost/api";

// async function reppits() {
//     const response = await fetch(apiUrl);
//     const subreppits = await response.json();
//     console.log(subreppits);
// };
// reppits();

import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();

const subreppits = ref([]);
const loading = ref(true);

const goToSubreppit = (id) => {
  router.push({ name: 'subreppit-posts', params: { id } });
};


async function fetchData() {
  const response = await fetch('http://127.0.0.1:8000/api/subreppits');
  const data = await response.json();
  subreppits.value = data;
  loading.value = false;
};

onMounted(() => {
  fetchData();
});
</script>


 <template>
     <div class="leftmenu">
         <div class="login">
                 <button class="btnlogin" @click="editNote">Register</button>
         </div>
         <div class="Menu">
                 <ul class="divsubreppit">
                     <li class="subreppit" v-for="subreppit in subreppits" :key="subreppit.id" @click="goToSubreppit(subreppit.id)">{{ subreppit.title }}</li>
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
    position: relative;
    
}
.login{
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
    position: absolute;
    margin-top: 100px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 20%;
    font-family: 'Poppins';
}

.subMenu > div{
    display: flex;
    align-items: center;
    margin: 5px auto;
    width: 80%;
    padding: 0;
    background-color: #FAFAFA;
    border: solid 1px #808080;
    border-radius: 5px;
    box-shadow: 0px 0px 5px 0.2px rgba(64, 64, 64, 0.78)
}

.subMenu > div svg{
    margin: 10px;
}

.subMenu > div a{
    text-decoration: none;
    color: black;
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

.subMenu > div a:hover{
    background-color: #FF4500;
    color: #FAFAFA;
    cursor: pointer;
}
</style>