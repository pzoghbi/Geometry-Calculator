<template>
    <div class="row">
        <div v-for="triangle in shapes.triangles">
            <div class="row" @click="selectObject($event)" :data-id="triangle.id">
                <div class="col-md-2">{{ triangle.id }}</div>
                <div class="col-md-2">{{ triangle.a }}</div>
                <div class="col-md-2">{{ triangle.b }}</div>
                <div class="col-md-2">{{ triangle.c }}</div>
                <div class="col-md-2">{{ triangle.surface }}</div>
                <div class="col-md-2">{{ triangle.circumference }}</div>
            </div>
        </div>
        <div v-for="circle in shapes.circles">
            <div class="row" :data-id="circle.id">
                <div class="col-md-2">{{ circle.id }}</div>
                <div class="col-md-6">{{ circle.radius }}</div>
                <div class="col-md-2">{{ circle.surface }}</div>
                <div class="col-md-2">{{ circle.circumference }}</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CombineGeometry",
        data() {
            return {
                shapes: []
            }
        },
        mounted() {
            fetch('/getshapes')
                .then(response => response.json())
                .then(data => this.shapes = data)
                .catch(error => console.log(error.message))
        },
        methods: {
            selectObject(event) {
                console.log(event);
                if ($(".selected").length < 2) {
                    $(event.target.closest(".row")).toggleClass("bg-dark text-light selected");
                } else {
                    this.shapes.triangles.forEach(e => {
                        alert(e.id);
                    });
                }
            }
        }
    }
</script>

<style scoped>

</style>
