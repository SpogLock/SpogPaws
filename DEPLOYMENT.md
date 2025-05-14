# CI/CD Deployment

The project includes a CI/CD pipeline using GitHub Actions to automatically deploy to your server when changes are pushed to the main branch.

## Setup Instructions

### 1. Generate SSH Key Pair for Deployment

On your local machine:

```bash
ssh-keygen -t ed25519 -C "deployment-key" -f deployment_key
```

This will create two files:
- `deployment_key` (private key)
- `deployment_key.pub` (public key)

### 2. Add Public Key to Your Server

Copy the content of `deployment_key.pub` and add it to `~/.ssh/authorized_keys` on your server:

```bash
# On your server
echo "YOUR_PUBLIC_KEY_CONTENT" >> ~/.ssh/authorized_keys
```

### 3. Set Up GitHub Secrets

In your GitHub repository:
1. Go to Settings > Secrets and variables > Actions
2. Add the following secrets:

   - `SSH_PRIVATE_KEY`: The entire content of your `deployment_key` file
   - `SERVER_IP`: Your server's IP address
   - `SSH_USER`: The username for SSH login
   - `SERVER_PATH`: The absolute path on the server where the project should be deployed (e.g., `/var/www/spogpaws`)

### 4. Server Requirements

Ensure your server has:
- PHP 8.2+
- Composer
- Node.js and npm
- MySQL or your database of choice
- Web server (Nginx or Apache)

### 5. First-Time Setup

For the first deployment, you may need to manually set up your `.env` file on the server with the appropriate database credentials and other environment-specific settings.

## How It Works

The CI/CD pipeline will:
1. Install PHP and JS dependencies
2. Build frontend assets
3. Deploy files to your server using rsync
4. Run database migrations and other Laravel optimization commands

The site will briefly go into maintenance mode during deployment to prevent user-facing errors.

## Manual Deployment

You can also manually trigger a deployment by going to the Actions tab in GitHub and selecting "Run workflow" on the Deploy workflow. 