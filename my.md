To change the root password of the MySQL database, you would typically follow these steps:

1. **Open Command Prompt (Windows) or Terminal (Unix/Linux)**: You'll need to use the command-line interface to execute MySQL commands.

2. **Connect to MySQL Server**: Use the following command to connect to the MySQL server as the root user:

   ```
   mysql -u root -p
   ```

   After running this command, you'll be prompted to enter the current root password. If you've never set a password for the root user, you might not need to enter anything. Press Enter to proceed.

3. **Change Root Password**: Once you're logged in, you can use the following SQL command to change the root password:

   ```sql
   ALTER USER 'root'@'localhost' IDENTIFIED BY 'new_password';
   ```

   Replace `'new_password'` with the new password you want to set.

   If you want to change the root password for a different host, replace `'localhost'` with the appropriate hostname or IP address.

4. **Flush Privileges**: After changing the password, you should flush the privileges to ensure that the changes take effect immediately:

   ```sql
   FLUSH PRIVILEGES;
   ```

5. **Exit MySQL Client**: Once you've changed the root password and flushed privileges, you can exit the MySQL client by typing:

   ```
   exit
   ```

6. **Verify New Password**: Try connecting to the MySQL server again using the new root password to ensure that it works.

By following these steps, you can change the root password for the MySQL database. Make sure to use a strong password and follow best practices for managing database credentials.
