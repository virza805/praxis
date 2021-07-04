<?php 

function ocdi_import_files() {
  return array(
    array(
      'import_file_name'             => 'Praxis',
      'categories'                   => array( 'Category 1', 'Category 2' ),
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/demo.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/widgets.json',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer.dat',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux.json',
          'option_name' => 'redux_option_name',
        ),
      ),
      
      'import_notice'                => __( 'After you import.', 'your-textdomain' ),
      'preview_url'                  => 'http://www.your_domain.com/my-demo-1',
    ),
    array(
      'import_file_name'             => 'Praxis 1',
      'categories'                   => array( 'Category 1', 'Category 2' ),
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/demo.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/widgets.json',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer.dat',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux.json',
          'option_name' => 'redux_option_name',
        ),
      ),
      'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
      'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'your-textdomain' ),
      'preview_url'                  => 'http://www.your_domain.com/my-demo-1',
    ),
    
  );
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );