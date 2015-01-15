# OOPAngularExample
An OOP application that I did to demonstrate my AngularJS + fronted skills (bootstrap) and obviously OOP skills

### Running the app ###
Just git clone and then point your browser to index.php.

### Design Decisions ###
This app uses angularjs to fetch items from a static URL. The httpget retrieves json elements and instead of just doing $scope.items = data, we manually add each item details to $scope.items because we need to process the "remaining time" (i.e. time left in the sale/offer) and add it to each item and also in version 2 we might wanna add timers to each item.
I'd use http://siddii.github.io/angular-timer/ to quickly complete the timer part.

This app is not just about quickly doing CSS but also shows that I can do angularjs.

### Note ###
The AutoLoader was developed by me in a previous project which I'm reusing.
