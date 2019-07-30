# Renegade RPG Game.
#  Finish this project by August 9, 2019.

To ship :

1. Login 
	->
	
2. Registration
- Default gold is 5,000 Gold	

- Sign up as a leader of a faction(It's fee is 10,000 Gold)
	- If you have an extra mone

- you can sign up as a leader or as someone who's a soldier only

 or as a 
	
3. Browse Missions
	- Daily Missions

	- Find a mission depending on the faction u are in.
		
	~> You can only join a faction once you complete a challenge daily.

	- Players who are in the higher ranks and who have lots of gold can pay to lead a faction.
	- They can afford horses
			- They can afford equipments
	
		- Leaders can opt out to not play daily missions
	
		- They can create a mission depending on what mission
	
	- Find an enemy 2 hunt daily if you're just a renegade / lone knight

	- If you belong to a fighter group,  

	- Everytime you attack an enemy, he'll be dead for a week depending 
	

4. Paypal API
	- Let users pay for purchasing	
		- A weapon
		- An upgrade of his suit.
		- Something
	- Free 
	
5. Creation of a Character.

6. Ranking a character..

7. Create a map

8. 

# mechanics

-- every night there will be someone who might attack you or your faction

-- Implement Elo rating for the ranking of the renegades as people can choose who's the most popular fighter among them.

-- Fight for the domination of the continent


Decide whether : 
-- The user will have to interact with the app so that he can control his fight / let the computer just decide a winner after x seconds of waiting.

-- user can choose to join a faction or just work by himself, but a faction can definitely help him survive attacks.

-- whenever he goes to sleep, he should go and find an inn or a place to take rest in a specific location.

Attributes for user: 
	
1. Morale 
	-> Initially, it is 100
	-> Only gets reduced during war
	-> It will just refill if there's a knight around
	->  

2. Strength
	-> Initially, it's just 50, 
	-> By participating in tournaments, one can increase

3. Dexterity
	-> Initially, it's set to 50 
	-> You can increase this by participating in arena fights

4. Integrity 
	-> Initially, it's max to 10, max is 10 

5. Gold
	-> One can increase,by winning in fights against characters who are stronger / and have higher bounty

During a war : 

Cbaracters :

	- Knight's initial attributes are 
			-- a knight can increase a morale of the soldiers
			- Integrity - 10/10 	
			- Dexterity - 6/10 - 5.001%
			- Gold - 

	-- a mercenary are skilled at combat	
			->  but is low on integrity, so you can't really trust them
			-> 

	-- a normal person
			-> Can choose lots of careers.
		
		- Initial attributes are : 
				Integrity - 1/10
				Dexterity - 6/10


	+ points for a normal person 
	+ points for 


-- calculate the algorithm for the damage

App Flow : 

1. See the landing page.. 
- User needs to have an account so that he can access the app.
- After registering he needs 2 verify his email.


2. Enter into the app 
- New User
~> Enter the ff:
=> Desired Name 
=> Gender
=> Desired Unique ID
=> Desired Picture / Photo (Should be a )
~> User can now start his campaign..
=> Discover the world of Renegades and fight to be the best fighter of them all. 
=> Enter the world as a fighter then increase your strength, there's no max health


--------TOP MENU OPTIONS--------
-> JOIN Faction /  CLUSTER / GROUP [Y/N/Ask Later[L]]? 
=> Enter cluster/group ID ? 3002



### Tables

---
1. users
- id(PK)
- name
- email
- username
- password




2. characters 
- user_id (FK) one to one with the users table
- affiliation_id (FK)
- character_type_id (FK) // soldier  / mercenary / knight / 
- display_name (username originally, can be changed)
- hair_type (bald/curly/hairy)
- hair_color(blonde/black/cinamon)
- eye_color ( blue/hazel/green/brown)
- skin_color

3. character_types()
- id
- title - (Mercenaries , Knight, Normal guy ) 
- description - Mercenaries can fight for kingdoms down to factions.

4. kingdoms ()
- id
- kingdom_name

- Kingdoms are Sherfoye, Mattgard, Vogard, Geiber, Wendham
		- The capital of this is Geiber
		- The richest is S 
- region (Western, Northern)

// western sherfoye
// Central mattgard
// eastern gerber
// Northern Hempshire



// a faction means that we can fight for a kingdom or whatever our leader tells us 

5. factions ()
- id 
- faction_type_id (mercenary, knights)
- current_locale_id ()
- faction_name (Fury Spear)
- motto (To fight for glory)
- members_count(int) -> depending on how many members belong to an affiliation

6. locale
- id 
- name (Northern Shergar, Western Shergar, East of Sherfoye, )

// these means that the official military of a kingdom
7. armies 
- id 
- kingdom_id
- member_count







# Renegade RPG Game.

# mechanics

-- every night there will be someone who might attack you or your faction

-- Implement Elo rating for the ranking of the renegades as people can choose who's the best fighter among them

Decide whether : 
-- The user will have to interact with the app so that he can control his fight / let the computer just decide a winner after 20 seconds of waiting.

-- user can choose to join a faction or just work by himself, but a faction can definitely help him survive attacks

-- whenever he goes to sleep, he should go and find an inn or a place to take rest in a specific location.

Attributes to take notice : 

1. Morale 
	-> Initially, it is 100
2. Strength
	-> Initially, it's just 50, 
	-> By training in the 
3. Dexterity
	-> Initially, it's set to 50 
	-> You can increase this by participating in arena fights
4. Integrity 
	-> Initially, it's max to 10, max is 10 
5. Gold
	-> 	


-- a knight can increase a morale of the soldiers
	- Knight's initial attributes are 
			- Integrity - 10/10
			- Dexterity - 5/10 - 5.001%
			- 

-- a mercenary are skilled at combat	-
		->  but is low on loyalty, so you can't really trust the
// a normal person can be a foot soldier
	- Initial attributes are : 
			Integrity - 1/10
			Dexterity - 6/10

+ points for a normal person 
+ points for 


-- calculate the algorithm for the damage


App Flow : 

1. See the landing page.. 
- User needs to have an account so that he can access the app.
- After registering he needs 2 verify his email.


2. Enter into the app 
- New User
~> Enter the ff:
=> Desired Name 
=> Gender
=> Desired Unique ID
=> Desired Picture / Photo (Should be a )
~> User can now start his campaign..
=> Discover the world of Renegades and fight to be the best fighter of them all. 
=> Enter the world as a fighter then increase your strength, there's no max health


--------TOP MENU OPTIONS--------
-> JOIN Faction /  CLUSTER / GROUP [Y/N/Ask Later[L]]? 
=> Enter cluster/group ID ? 3002

