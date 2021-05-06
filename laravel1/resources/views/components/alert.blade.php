<div class="alert">
    {{-- <strong>{{$type}}</strong> --}}
    {{$slot}}

</div>

<style>

.alert{
    border: 1px solid #ff0000;
    padding: 10px;
    background-color: #ff0000;
    color: #fff;
    border-radius: 5px;
    text-align: center;
}
.alert:hover{
    color:white;
    background-color: #ff0000;
    transition: ease-in 200ms;
}
</style>
