var email_addresses = document.getElementsByClassName( 'email_address' );

for( let i = 0; i < email_addresses.length; i++ )
{
    var the_email_address = email_addresses[ i ].innerHTML.replaceAll( ' [at] ', '@' ).replaceAll( ' [dot] ', '.' );

    email_addresses[ i ].innerHTML = '<a href="mailto:' + the_email_address + '" target="_blank"' + ( email_addresses[ i ].hasAttribute( 'link-class' ) ? ' class="' + email_addresses[ i ].getAttribute( 'link-class' ) + '"' : '' ) + '>' + the_email_address + '</a>';

    if( email_addresses[ i ].hasAttribute( 'link-class' ) )
        email_addresses[ i ].removeAttribute( 'link-class' );
}
