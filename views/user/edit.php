<h1>User: Edit</h1>

<form method="post" action="<?php echo URL; ?>user/editSave/<?php echo $this->user['id']; ?>">
<label>Real Name</label><input type="text" name="realname" value="<?php echo $this->user['realname']; ?>" /><br />
<label>Username</label><input type="text" name="username" value="<?php echo $this->user['username']; ?>" /><br />
<label>Password</label><input type="text" name="password" /><br />
<label>Email</label><input type="text" name="email" value="<?php echo $this->user['email']; ?>" /><br />
<label>Role</label>
<select name="role">
<option value="default" <?php if ($this->user['role'] == 'default') echo 'selected'; ?>>Default</option>
<option value="admin" <?php if ($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
<option value="owner" <?php if ($this->user['role'] == 'owner') echo 'selected'; ?>>Owner</option>
</select><br />
<label>&nbsp;</label><input type="submit" />
</form>