<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Laravel</title>
		@vite('resources/css/app.css')
	</head>
	<body>
			<style>
				/*remove custom style*/
				  .circles{
				    position: absolute;
				    top: 0;
				    left: 0;
				    width: 100%;
				    height: 100%;
				    overflow: hidden;
				}
				  .circles li{
				    position: absolute;
				    display: block;
				    list-style: none;
				    width: 20px;
				    height: 20px;
				    background: rgba(255, 255, 255, 0.2);
				    animation: animate 25s linear infinite;
				    bottom: -150px;  
				}
				.circles li:nth-child(1){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
				    left: 25%;
				    width: 80px;
				    height: 80px;
				    animation-delay: 0s;
				}
				 
				 
				.circles li:nth-child(2){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
				    left: 10%;
				    width: 20px;
				    height: 20px;
				    animation-delay: 2s;
				    animation-duration: 12s;
				}
				 
				.circles li:nth-child(3){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
				    left: 70%;
				    width: 20px;
				    height: 20px;
				    animation-delay: 4s;
				}
				 
				.circles li:nth-child(4){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
				    left: 40%;
				    width: 60px;
				    height: 60px;
				    animation-delay: 0s;
				    animation-duration: 18s;
				}
				 
				.circles li:nth-child(5){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
				    left: 65%;
				    width: 20px;
				    height: 20px;
				    animation-delay: 0s;
				}
				 
				.circles li:nth-child(6){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
				    left: 75%;
				    width: 110px;
				    height: 110px;
				    animation-delay: 3s;
				}
				 
				.circles li:nth-child(7){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
				    left: 35%;
				    width: 150px;
				    height: 150px;
				    animation-delay: 7s;
				}
				 
				.circles li:nth-child(8){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 50%;
					width: 25px;
					height: 25px;
					animation-delay: 15s;
					animation-duration: 45s;
				}
				 
				.circles li:nth-child(9){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 20%;
					width: 15px;
					height: 15px;
					animation-delay: 2s;
					animation-duration: 35s;
				}
				 
				.circles li:nth-child(10){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 85%;
					width: 150px;
					height: 150px;
					animation-delay: 0s;
					animation-duration: 11s;
				}
				.circles li:nth-child(11){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 12%;
					width: 50px;
					height: 50px;
					animation-delay: 0s;
					animation-duration: 45s;
				}
				 
				 
				.circles li:nth-child(12){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 30%;
					width: 20px;
					height: 20px;
					animation-delay: 2s;
					animation-duration: 19s;
				}
				 
				.circles li:nth-child(13){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 52%;
					width: 25px;
					height: 25px;
					animation-delay: 4s;
					animation-duration: 29s;
				}
				 
				.circles li:nth-child(14){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 10%;
					width: 60px;
					height: 60px;
					animation-delay: 0s;
					animation-duration: 18s;
				}
				 
				.circles li:nth-child(15){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 90%;
					width: 20px;
					height: 20px;
					animation-delay: 0s;
					animation-duration: 14s;
				}
				 
				.circles li:nth-child(16){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 72%;
					width: 110px;
					height: 110px;
					animation-delay: 3s;
					animation-duration: 11s;
				}
				 
				.circles li:nth-child(17){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 65%;
					width: 150px;
					height: 150px;
					animation-delay: 7s;
					animation-duration: 14s;
				}
				 
				.circles li:nth-child(18){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 60%;
					width: 25px;
					height: 25px;
					animation-delay: 15s;
					animation-duration: 45s;
				}
				 
				.circles li:nth-child(19){
					background: url({{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }});
					filter: opacity(50%);
					left: 82%;
					width: 15px;
					height: 15px;
					animation-delay: 2s;
					animation-duration: 35s;
				}
				  @keyframes animate {
				    0%{
					transform: translateY(0) rotate(0deg);
					opacity: 1;
					border-radius: 0;
				    }
				 
				    100%{
					transform: translateY(-1000px) rotate(720deg);
					opacity: 0;
					border-radius: 50%;
				    }
				}
				.btnnt {
					border-radius: 0px 15px 15px 0;
					text-decoration: none;
					position: relative;
					z-index: 20;
					transition: all .35s cubic-bezier(1.000, 0.000, 0.000, 1.000);
				}
						.btnnt:hover {
							color: white;
						}
						.btnnt-color {
							color: #00514F;
						}
						.btnnt-color::before,
						.btnnt-color::after {
							background: #00514F;
						}
						.btnnt::before,
						.btnnt::after {
							border-radius: 0px 15px 15px 0;
							content: '';
							position: absolute;
							z-index: -1;
							transition: all .35s cubic-bezier(1.000, 0.000, 0.000, 1.000); 
						}
						.btnnt-l-r::after {
							height: 2.70rem;
							width: 0;
							top: 0;
						}
						.btnnt-l-r:hover::after { 
							width: calc(100% - 1.35rem); 
							height: 2.70rem;
						}
						.btnnt-l-r::after {
							left: calc(2.7rem / 2);
						}
				</style>
				<div class="relative min-h-screen flex ">
				    <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 bg-white">
				      <div class="sm:w-1/2 xl:w-3/5 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden bg-purple-900 text-white bg-no-repeat bg-cover relative"
					style="background-image: url({{ Vite::asset('resources/img/path-in-misty-autumn-forest-2021-08-26-17-17-23-utc.jpg') }});">
					<div class="absolute bg-gradient-to-b from-Emerald to-DarkGreen opacity-75 inset-0 z-0"></div>
						<div class="w-full max-w-4/5 z-10">
							<div class="sm:text-4xl xl:text-5xl font-bold leading-tight mb-6">Overview of an IT infrastructure management administration tool</div>
							<div class="sm:text-sm xl:text-md text-gray-200 font-normal">The administration tool for managing the IT infrastructure is a comprehensive software that allows IT managers to monitor, maintain, and update their IT infrastructure in a centralized manner. With a user-friendly interface, this tool also enables remote problem-solving and generates detailed reports on the state of the infrastructure. It is an indispensable tool for companies looking to optimize their use of IT resources.</div>
						</div>
					<!---remove custom style-->
				       <ul class="circles">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				   </ul>
				      </div>
				      <div class="md:flex md:items-center md:justify-center w-full sm:w-auto md:h-full w-2/5 xl:w-2/5 p-8  md:p-10 lg:p-14 sm:rounded-lg md:rounded-none bg-white">
					<div class="max-w-md w-full space-y-8">
					  <div class="text-center">
					    <h2 class="mt-2 text-3xl font-bold text-gray-900">
						The EthiFinance IT infrastructure management tool
					    </h2>
					    <p class="mt-7 text-sm text-gray-500">Please sign in to your account</p>
					  </div>
					  <div class="flex flex-row justify-center items-center w-full">
						<a href="{{ route('login.google') }}" class="btnnt btnnt-color btnnt-l-r w-full">
							<img src="{{ Vite::asset('resources/img/EFMonogram_Emerald.svg') }}" class="w-11 h-11 items-center justify-center inline-flex">
							<span class="pl-2 m-auto">Connect with EthiFinance Google Account</span>
						</a>
					  </div>
					  <div class="flex items-center justify-center space-x-2">
					    <span class="h-px w-16 bg-gray-200"></span>
					    <span class="text-gray-300 font-normal">or continue with</span>
					    <span class="h-px w-16 bg-gray-200"></span>
					  </div>
					  <form class="mt-8 space-y-6" action="#" method="POST">
					    <input type="hidden" name="remember" value="true">
					    <div class="relative">
					      <div class="absolute right-3 mt-4"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500"
						  fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
						</svg>
					      </div>
					      <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Email</label>
					      <input
						class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
						type="" placeholder="mail@gmail.com" value="">
					    </div>
					    <div>
					      <button type="submit"
						class="w-full flex justify-center bg-Emerald hover:bg-white border-Emerald border-2 text-LightBeige hover:text-Emerald p-4 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">
							Sign in
					      </button>
					    </div>
					  </form>
					</div>
				      </div>
				    </div>
				  </div>
		@vite('resources/js/app.js')
	</body>
</html>
