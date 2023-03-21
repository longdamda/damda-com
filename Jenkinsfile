pipeline {
  agent {
    node {
      label 'r'
    }

  }
  stages {
    stage('test1') {
      steps {
        git(url: 'https://github.com/longdamda/damda-com.git', branch: 'master', changelog: true)
      }
    }

    stage('deploy') {
      steps {
        archiveArtifacts(artifacts: 'teest', followSymlinks: true)
      }
    }

  }
}