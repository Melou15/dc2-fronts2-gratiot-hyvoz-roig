<style>

	#entete 
	{
		display: flex;
	    flex-direction: row;
	    align-items: flex-end;
	    justify-content: space-between;
	    padding-left: 15px;
	    padding-right: 15px;
	    margin-top: 20px;
	}

.logo{
		width: 50px;
		height: auto;
	}
	nav ul
	{
		display: flex;
		justify-content: flex-end;

	}

	nav a
	{
		font-size:15px;
		align-content: center;
    	text-decoration: none;
	}

	a:hover {
		color : #F4315B;
	}

		nav li
	{
		margin-right: 15px;
		list-style-type: none;

	}
</style>
<header id="entete">
	<div>
		<img class="logo" src="images/logo-dutty-fruit.png" alt="logo-dutty-fruit">
	</div>
	<div>	
		<nav>
			<ul>
				<li><a href="#">PRODUITS</a></li>
				<li><a href="#">PANIER</a></li>
				<li><a href="#">CLIENTS</a></li>
				<li><a href="#">CONTACT</a></li>
				<li><a href="ajoutprod.php">Ajouter un produit</a></li>
				<a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
			</ul>
		</nav>
	</div>
</header>