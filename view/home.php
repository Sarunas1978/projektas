
<div class="d-flex justify-content-around"> 
    <div id="change400" class="containerMain d-flex justify-content-center p-5">
        <div v-for="array in todo_array" class="container_small m-1">
            <div>
                <img class="image_service"  src="img/tennis.png" alt="">
            </div>
            <div class="d-flex flex-column">
                <div class="title_service m_r_l align-self-center">
                    <b>{{array.title}}</b>
                </div>
                <div class="m_r_l">
                    {{array.text}}
                </div>
            </div>
        </div>    
    </div>
</div>

<div id="map"></div>
