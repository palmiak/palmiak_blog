---
id: 2db32d5d-ce4e-48db-b941-22edec4be6d5
blueprint: pages
title: 'WCEU Workshop Materials'
updated_by: 93b8e665-714e-481d-af67-5ac201e067ef
updated_at: 1654316757
template: page
content:
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        text: 'Github repository'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: link
            attrs:
              href: 'https://github.com/palmiak/wceu2022-workshops'
              rel: null
              target: null
              title: null
        text: 'https://github.com/palmiak/wceu2022-workshops'
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        text: 'Few actions prepared to copy and paste'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Integration tests'
  -
    type: code_block
    content:
      -
        type: text
        text: "cd theme_02\r\nvendor/bin/wp-pest setup theme -n && true\r\ncomposer run ci:integration"
  -
    type: paragraph
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'npm audit'
  -
    type: code_block
    content:
      -
        type: text
        text: "cd theme_02\r\nnpm audit --audit-level=high --production"
  -
    type: paragraph
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'install git'
  -
    type: code_block
    content:
      -
        type: text
        text: 'apt-get update && apt-get install -y git'
  -
    type: paragraph
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'gitignored files'
  -
    type: code_block
    content:
      -
        type: text
        text: "cd theme_02\r\nif [[ ! -z $(git ls-files -i --exclude-standard) ]]; then exit 1; fi"
  -
    type: paragraph
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'merged conflicts'
  -
    type: code_block
    content:
      -
        type: text
        text: "cd theme_02\r\n! git grep -E \"<<<<<<< |>>>>>>> \" -- './*' ':!buddy.yml'"
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: hard_break
      -
        type: text
        text: 'Further reading'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Here is a list of different articles that you may find handy:'
  -
    type: bullet_list
    content:
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: link
                    attrs:
                      href: 'https://madebydenis.com/wordpress-integration-tests-with-pest-php/'
                      rel: null
                      target: null
                      title: null
                text: 'https://madebydenis.com/wordpress-integration-tests-with-pest-php/'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: link
                    attrs:
                      href: 'https://docs.cypress.io/guides/core-concepts/introduction-to-cypress'
                      rel: null
                      target: null
                      title: null
                text: 'https://docs.cypress.io/guides/core-concepts/introduction-to-cypress'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: link
                    attrs:
                      href: 'https://docs.github.com/en/actions/learn-github-actions/understanding-github-actions'
                      rel: null
                      target: null
                      title: null
                text: 'https://docs.github.com/en/actions/learn-github-actions/understanding-github-actions'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: link
                    attrs:
                      href: 'https://buddy.works/guides/wordpress'
                      rel: null
                      target: null
                      title: null
                text: 'https://buddy.works/guides/wordpress'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: link
                    attrs:
                      href: 'https://www.youtube.com/watch?v=hPYbVbqvQM8&t=73s'
                      rel: null
                      target: null
                      title: null
                text: 'https://www.youtube.com/watch?v=hPYbVbqvQM8'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: link
                    attrs:
                      href: 'https://www.cloudways.com/blog/getting-started-with-unit-testing-php/'
                      rel: null
                      target: null
                      title: null
                text: 'https://www.cloudways.com/blog/getting-started-with-unit-testing-php/'
      -
        type: list_item
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: link
                    attrs:
                      href: 'https://wpowls.co/articles/adopting-php-code-quality-tooling-with-wordpress/'
                      rel: null
                      target: null
                      title: null
                text: 'https://wpowls.co/articles/adopting-php-code-quality-tooling-with-wordpress/'
  -
    type: paragraph
  -
    type: paragraph
---
