Discovering Lumen for building a simple Api. 

From this tutorial : ```https://auth0.com/blog/developing-restful-apis-with-lumen/#Lumen-Key-Requirements```  
    
Endpoints in ```routes/web.php``` : GET, POST, PUT or DELETE an ```Author```   

Add a simple ```CLIENT_API_KEY``` in ```.env```, verified by a ```Http/Middleware/TokenMiddleware.php```.   
Each Api calls must be made with the key ```client-token``` set in the header of the request.   
