# Car-rental-system-website
# **Goals:**

Design a car rental system that's realistic and can be used.

The system provides multiple offices all over the world.

# **Validations:**

- Customers must be over 18 years
- Customers must enter valid national id and license number
- Password must be at least 8 characters
- No more than one account can be created for same person (national id, license number, and email must be unique)
- Rent dates must be valid (Customer can't rent a car in previous dates)

# **Features:**

Admin:

- View all daily payments (or choose specific range of dates)
- View all customers information (except for password)
- Insert a new office
- View all offices
- Insert new car to specific office
- Update car if it's out of service
- View all cars
- View Reservations:

- Can search by any of customer's information (name, email, national id, etc..)
- Can search by any of car's information (type, model, year, etc..)
- Can search by reservation information (start date, end date, payment done or not)

Customer:

- First customer should register and then log in
- He/she will be directed to home page where he/she can search for any car according to his/her need
- They must enter the following:

- Start and end date of reservation
- Country

- They'll also have the following as optional:

- Min, max price
- Car's type, model, model year

- After Renting a car he/she can go to the payment page having 2 options:

- Rent
- Cancel reservation

- Finally, a customer can view all of his reservations.

# **Security:**

No one can access or see the admin section except the admin when he enters his email and password in the login.

# **Queries:**

All queries are designed efficiently to get all the correct data for admin or customers and are dynamic to the advanced search the system provides. In other words, there's only one query to retrieve the data works for entering (car's specs, customer's information, etc..) or leaving these boxes empty.

for more about the website open the report file
