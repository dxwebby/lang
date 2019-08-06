<template>
    <div>
        <select v-model="lang" v-on:change="changeLanguage()" class="custom-select">
            <option value="english">English</option>
            <option value="tagalog">Tagalog</option>
        </select>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                lang: 'english',
            }
        },
        mounted(){

        },
        methods:{
            changeLanguage:function(){                                
                axios.get(`/api/language/${this.lang}`).then(response=>{                    
                    let d = response.data.lang[0];
                    
                    // Find elements and update contents
                    $('#main_title').text(d.main_title);
                    $('#main_desc').text(d.main_desc);
                })
            },
        },
    }
</script>

<style lang="scss" scoped>

</style>