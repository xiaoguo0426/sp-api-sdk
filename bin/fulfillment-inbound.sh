docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/5a98a87e8bd3e8caf95e2f36cf57cd9f87447471/models/fulfillment-inbound-api-model/fulfillmentInbound_2024-03-20.json \
    -c /sp-api/config/generator-fulfillment-inbound.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface