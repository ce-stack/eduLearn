<template>
    <div class="comments">
        <h2>comments</h2>
        <div class="row">
            <div class="col-md-6">
                
        <form action="#" @submit.prevent="commentSubmit()">
            <div>
            <textarea placeholder="your comment" v-model="comment" name="#"></textarea>
        </div>
        <div>
            <button type="submit" name="#">add</button>
        </div>
        </form>
            </div>
            <div class="col-md-6">
                <div class="comments">

                </div>
            </div>
        </div>
    </div>    
</template>

<script>
export default {
    mounted() {
        console.log('comments comopnents')
    },
    props: ['course_id'],
    data() {
        return {
            comments: [],
            comment: ""
        }
    },
    methods: {
        commentSubmit() {
          
            axios.post('/comments/store', {
                body: this.comment,
                course_id: this.course_id
            })
            .then(function(response)  {
               
                console.log(response)
            })
            .catch(function(response) {
                console.log(response)
            }) 
        },
        
    }
}
</script>