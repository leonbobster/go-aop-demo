pipeline {
    agent { docker { image 'docker' } }
    stages {
        stage('Build') {
            steps {
                sh ' docker-compose -f build.yml up -d --build --remove-orphans'
                sh ' docker-compose -f build.yml run php_cli composer install'
            }
        }
        stage('Test') {
            steps {
                sh ' docker-compose -f build.yml run php_cli php -v'
            }
        }
    }
    post {
        always {
            sh ' docker-compose -f build.yml down'
        }
    }
}