<template>
    <div class="row">
        <div v-for="triangle in shapes.triangles">
            <div class="row">
                <div class="col-md-2">
                    {{ triangle.id }}
                </div>
                <div class="col-md-2">
                    {{ triangle.a }}
                </div>
                <div class="col-md-2">
                    {{ triangle.b }}
                </div>
                <div class="col-md-2">
                    {{ triangle.c }}
                </div>
                <div class="col-md-2">
                    {{ triangle.surface }}
                </div>
                <div class="col-md-2">
                    {{ triangle.circumference }}
                </div>
            </div>
        </div>
        <div v-for="circle in shapes.circles">
            {{ circle.id }}
            {{ circle.radius }}
            {{ circle.surface }}
            {{ circle.circumference }}
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
    }
</script>

<style scoped>

</style>
