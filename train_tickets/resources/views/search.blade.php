@extends('layouts.app')

@section('title')
Search Res
@endsection
@include('include.header')
@section('content')
<section >
<div class="s01">
                <form action="@{'/searchAll'}" method="get">

                    <div class="inner-form">
                    <div class="input-field second-wrap">
                            <div class="form-group ">
                                <label class="control-label requiredField" for="starts" >
                                    <span > City from :  </span>
                                    <span class="asteriskField">
        *
       </span>
                                </label>
                                <select class="select form-control"  name="city_from_id" >
                                    <option th:each="brand : ${ brands }" th:text="${brand.name}  " th:value="${brand.id} " th:selected="${brand_id==brand.id}" >
                                    </option>

                                </select>
                            </div>
                        </div>
                        <div class="input-field second-wrap">
                            <div class="form-group ">
                                <label class="control-label requiredField" for="starts" >
                                    <span > City to :</span>
                                    <span class="asteriskField">
        *
       </span>
                                </label>
                                <select class="select form-control"  name="city_to_id" >
                                    <option th:each="brand : ${ brands }" th:text="${brand.name}  " th:value="${brand.id} " th:selected="${brand_id==brand.id}" >
                                    </option>

                                </select>
                            </div>
                        </div>
                        <div class="input-field second-wrap">
                        <input name="deparure" type="date" id = "departure" class="form-control date" id="deparure" placeholder="Select date..." required="" onchange='this.form.()' name = "departure_date">
                        </div>
                    

                        <div class="input-field third-wrap">
                            <button class="btn-search" type="submit" th:text="Search"></button>
                        </div>
                    </div>
                </form>
        </div>
        <div class="container">
            <div class="row">
            <div class="flex items-center justify-center min-h-screen">
        <div class="max-w-md md:max-w-2xl px-2">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden md:flex">
                <div class="bg-cover bg-bottom h-56 md:h-auto md:w-56" style="background-image: url(https://images.unsplash.com/photo-1517736996303-4eec4a66bb17?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1268&q=80)">
                </div>
                <div>
                    <div class="p-4 md:p-5">
                        <p class="font-bold text-xl md:text-2xl">Amsterdam Walking Tour</p>
                        <p class="text-gray-700 md:text-lg">Explore popular tourist destinations as well as hidden local favourites.</p>
                    </div>
                    <div class="p-4 md:p-5 bg-gray-100">
                        <div class="sm:flex sm:justify-between sm:items-center">
                            <div>
                                <div class="text-lg text-gray-700"><span class="text-gray-900 font-bold">17</span> per person*</div>
                                <div class="flex items-center">
                                    <div class="flex inline-flex -mx-px">
                                        <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                            <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" /></svg>
                                        <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                            <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" /></svg>
                                        <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                            <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" /></svg>
                                        <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                            <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" /></svg>
                                        <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                            <path d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" /></svg>
                                    </div>
                                    <div class="text-gray-600 ml-2 text-sm md:text-base mt-1">28 reviews</div>
                                </div>
                            </div>
                            <button class="mt-3 sm:mt-0 py-2 px-5 md:py-3 md:px-6 bg-indigo-700 hover:bg-indigo-600 font-bold text-white md:text-lg rounded-lg shadow-md">Book now</button>
                        </div>
                        <div class="mt-3 text-gray-600 text-sm md:text-base">*Prices may vary depending on selected date.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </section>
    <script>

  var x = document.getElementById("departure");
  
  var currentVal = x.value;
  
    x.value = "GET OUT OF MY SWAMP";
  

</script>
@endsection



