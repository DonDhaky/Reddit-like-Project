<script setup>
    
</script>

<template>
    <div class="Menu">
        <h2 class="HeaderSubReppit">SubReppit</h2>
            <ul class="divsubreppit">
                <li class="subreppit">Gaming</li>
                <li class="subreppit">Funny</li>
                <li class="subreppit">Series</li>
            </ul>
    </div>
</template>

<style scoped>
body{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
.Menu{
    width: 200px;

}
.HeaderSubReppit{
    display: flex;
    justify-content: center;
    overflow-wrap: break-word;
    margin: 5px 10px;
}
.divsubreppit{
    display: table;
    margin: 0 auto;
    /* width: fit-content; */
    padding: 0;
    background-color: #FAFAFA;
    border: solid 1px #808080;
    border-radius: 5px;
    box-shadow: -3px 3px 15px -2px rgba(0,0,0,0.78)
}
.subreppit{
    text-decoration: none;
    list-style-type: none;
    text-align: center;
    margin: 5px 10px;
    padding: 5px 10px;
    background-color: #FF4500;
    border: solid 1px #808080;
    border-radius: 5px;
    color: white;
}
.subreppit:hover{
    background-color: #808080;
    color: #FAFAFA;
    cursor: pointer;
}

</style>