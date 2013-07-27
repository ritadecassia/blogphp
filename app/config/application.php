<?php
/**
 * 	Arquivo de configuração da nossa aplicaçaõ
 *	@author Rita de Cassia <ritadecassiadepaula@gmail.com>
 *	@todo Aqui estão presentes as confiturações de path(caminhos), banco de dados
 *		includes de arquivos de rotas, e outros.
 */


/**
 * Ambiente de desenvolvimento
 */
if (preg_match("/192.168\.[1,3]\.[0-9]{1,3}", $_SERVER['SERVER_ADDR']) || 
	$_SERVER['SERVER_ADDR'] == "127.0.01"){
	// desenvolvimento

} else {
	// produção
}



/**
 * Paths
 */


/**
 * Banco de dados
 */



/**
 * Includes
 */