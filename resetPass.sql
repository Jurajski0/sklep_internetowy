ALTER TABLE `users`
  ADD `reset_token` VARCHAR(64) DEFAULT NULL,
  ADD `reset_token_expires` DATETIME DEFAULT NULL;