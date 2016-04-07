<!-- Footer -->
<div class="footer">
	
    <div class="container">
        <div class="row">

        	<div class="logo">
        		<img src="{{asset('img/logo.jpg')}}">
        	</div>
            <div class="copyright">
                <p class="copyright text-muted">Copyright &copy; 2016</p>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
	.footer{
		background: #f2f2f2;
	}
	.logo{
		text-align: center;
		position: relative;
	}
	body{
		position: relative;
	}
	.logo img{
		max-width: 15%;
		
	}
	.copyright{
		text-align: right;
		position: relative;
	}
	@media screen and (max-width: 990px){
		.logo img{
			max-width: 35%;
		}
		.copyright{
			text-align: center;
		}
	}
</style>