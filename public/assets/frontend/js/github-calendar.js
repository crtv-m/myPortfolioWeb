// Замените 'username' на имя пользователя, для которого вы хотите получить контрибуции
const username = 'crtv-m';
// Ваш GitHub токен для аутентификации (опционально, но рекомендуется для увеличения лимита запросов)
const token = 'your_github_token';

async function getRepositories(user) {
    const response = await fetch(`https://api.github.com/users/${user}/repos`, {
        headers: {
            'Authorization': `token ${token}`
        }
    });
    const repos = await response.json();
    return repos;
}

async function getContributions(user, repo) {
    const response = await fetch(`https://api.github.com/repos/${user}/${repo}/commits`, {
        headers: {
            'Authorization': `token ${token}`
        }
    });
    const commits = await response.json();
    return commits;
}

async function main(user) {
    const repos = await getRepositories(user);
    const contributions = {};

    for (const repo of repos) {
        const repoName = repo.name;
        const commits = await getContributions(user, repoName);
        contributions[repoName] = commits;
    }

    // Выводим контрибуции в виде JSON
    console.log(JSON.stringify(contributions, null, 4));
}

main(username);
