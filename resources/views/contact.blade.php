@extends('master')
 
@section('titlePage', 'Contact')
 
@section('content')

<style>

main
{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 90%;
    margin: auto;
}

.title
{
    font-size: 50px;
    font-weight: bold;
    padding: 1.5% 0;
}

.title-info
{
	padding-bottom: 2%;
}

.form
{
    display: flex;
    flex-direction: column;
    width: 60%;
    padding: 2%;
}

.input-group, .textarea-group
{
    padding: 1% 0;
}

input, textarea
{
    color: inherit;
    width: 100%;
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #757575;
    padding: 1.5%;
    font-size: 20px;
}
input {
    background-color: #0c2d48;
}

input:focus, textarea:focus
{
    background-color: transparent;
    outline: transparent;
    border-bottom: 2px solid #69f0ae;
}

input::placeholder, textarea::placeholder
{
    color: transparent;
}

label
{
    color: #757575;
    position: relative;
    left: 0.5em;
    top: -2em;
	cursor: auto;
    transition: 0.3s ease all;
}

input:focus ~ label, input:not(:placeholder-shown) ~ label
{
    top: -4em;
    color: #69f0ae;
    font-size: 15px;
}

textarea:focus ~ label, textarea:not(:placeholder-shown) ~ label
{
    top: -10.5em;
    color: #69f0ae;
    font-size: 15px;
}

.button-div
{
    display: flex;
    justify-content: center;
}

.button-contact
{
    padding: 2%;
    width: 50%;
    border: 1px solid;
    border-color: #212121;
    border-radius: 5px;
    font-family: inherit;
    font-size: 18px;
    background-color: #091f39;
    color: inherit;
    box-shadow: 0 0 10px #212121;
}

button:hover
{
    background-color: #424242;
    color: #1cacf4;
    cursor: pointer;
}


/* Media queries */

@media screen and (max-width: 1200px)
{
    .form
    {
        width: 70%;
    }
}

@media screen and (max-width: 680px)
{
    .form
    {
		width: 90%;
    }
}

@media screen and (max-width: 500px)
{
	.title
	{
		font-size: 40px;
		padding-top: 6%;
	}

	.title-info
	{
		font-size: 13px;
	}
	
	.form
	{
		padding: 6% 4%;
		padding-top: 15%;
	}

	.input-group, .textarea-group
    {
		padding: 3% 0;
	}
	
	input, textarea
	{
		font-size: 15px;
	}

	input:focus ~ label, input:not(:placeholder-shown) ~ label
	{
		top: -3.5em;
		left: 0.1em;
	}
	
	textarea:focus ~ label, textarea:not(:placeholder-shown) ~ label
	{
		top: -8.5em;
		left: 0.2em;
    }
    
    .button-contact
    {
        font-size: 15px;
    }
}
</style> 


<main class="container_9 w-full ">
<div class="container_10 w-1/2 max-w-4xl bg-red-500 p-2 rounded-lg shadow-lg flex flex-col items-center my-20">
            <div class="text-white title">Contact Me!</div>
            <div class="text-white title-info">Gimme some random things you want to share with me :)</div>

            <form action="{{ route('contact') }}" method="post" class="form">
             @csrf
            <div class="input-group">
            <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="First name">
            <label for="first-name">Name</label>
            @error('title')
            <p class="text-xs">{{ $message }}</p>
            @enderror
            </div>

            <div class="textarea-group">
            <textarea name="body" id="body" rows="5" placeholder="Message">{{ old('body') }}</textarea>
            <label for="message">Message</label>
            @error('body')
            <p class="text-xs">{{ $message }}</p>
            @enderror
            </div>

            <div class="button-div">
                <button class="button-contact" type="submit">Send</button>
            </div>
            </form>

            </div>
        </main>
@endsection  